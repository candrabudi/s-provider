<?php

use Illuminate\Support\Facades\Auth;

$user_level = Auth::user()->level;
$is_developer = (int) $user_level === 2;
$is_admin = (int) $user_level <= 2;

?>
@extends('backoffice.layouts.main')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Data Deposit Member
    </div>

    <div class="card-header">
        <form class="form-horizontal">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-text">Tanggal</label>
                        <div class="tanggal">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="date" name="date_start" class="form-control" id="date_start" value="<?= $date_start ?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="date_end" class="form-control" id="date_end" value="<?= $date_end ?>">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label> Status</label>
                        <select class="form-control" id="type_trans">
                            <option value="1">Belum Konfirmasi</option>
                            <option value="2">Berhasil Konfirmasi</option>
                            <option value="3">Gagal Konfirmasi</option>
                            <option value="0">Semua</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <a id="btn_search" class="btn btn-success"><i class="fa fa-search"></i> Filter</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th scope="col">Tanggal</th>
                    <th>Username</th>
                    <th>Rek Pengirim</th>
                    <th>Metode</th>
                    <th>Deposit</th>
                    <th>Bonus</th>
                    <th>Keterangan</th>
                    <th>Bukti TF</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>

<div class="click-area">
    <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="konfirmasi_pay" action="" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Transaksi
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin akan mengkonfirmasi transaksi ?
                    </div>
                    <input type="hidden" name="status" value="2">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="tolak_pay" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tolak Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-text text-muted">Alasan Penolakan
                                        :</label>
                                    <input name="alasan" type="text" class="form-control" placeholder="Masukan Alasan Penolakan" value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="status" value="3">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="bukti_transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti Transfer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="data_transfer" src="" style="width: 100%" alt="Bukti Image">
                </div>
                <input type="hidden" name="status" value="2">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-tolak{
        margin-left: 8px;
    }
</style>
<script>
    const url = {
        main : '{{ URL::to("deposit") }}'
    };

    let datatables_data = [];

    $(document).ready(function() {
        const data_action = "{{ URL::to('user-deposit/aksi/') }}/";

        // datatables list
        datatables_data = [
                @foreach ($deposit as $item)
                {
                    iteration: '{{ $loop->iteration }}',
                    id: '{{ $item->id }}',
                    created_at: '{{ $item->created_at }}',
                    username: '{{ $item->User->name }}',
                    rekening: '{{ $item->rek_pengirim }}',
                    bank: '{{  $item->DataBank->nama_bank }}',
                    nominal: '@currency($item->nominal)',
                    bonus: '@currency(($item->nominal * $item->bonus_persentase) / 100)',
                    keterangan: '{{ $item->keterangan }}',
                    status: '{{ $item->status }}',
                    img: '{{ $item->bukti_transfer !== null ? asset("/storage/bukti_transfer/" . $item->bukti_transfer) : "" }}'
                },
                @endforeach
        ];

        $('#example2').DataTable({
            paging: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
            order: [[1, 'desc']],
            bState: false,
            bAutoWidth: false,
            data: datatables_data,
            aoColumns: [{
                    sWidth: '5%',
                    mData: 'iteration'
                },
                {
                    sWidth: '5%',
                    mData: 'created_at'
                },
                {
                    sWidth: '15%',
                    mData: 'username'
                },
                {
                    sWidth: '8%',
                    mData: 'rekening'
                },
                {
                    sWidth: '8%',
                    mData: 'bank'
                },
                {
                    sWidth: '10%',
                    mData: 'nominal'
                },
                {
                    sWidth: '8%',
                    mData: 'bonus'
                },
                {
                    sWidth: '10%',
                    mData: 'keterangan'
                },
                {
                    sWidth: '5%',
                    mData: "id",
                    mRender: render_transfer
                },
                {
                    sWidth: '10%',
                    mData: "id",
                    mRender: render_action
                }

            ]
        });

        $(document).on('click', '.btn-konfirmasi', function() {
            const data_id = $(this).attr('data-id');

            $('#konfirmasi_pay').attr('action', data_action + data_id);
        });

        $(document).on('click', '.btn-tolak', function() {
            const data_id = $(this).attr('data-id');

            $('#tolak_pay').attr('action', data_action + data_id);
        });

        $(document).on('click', '#btn_search', function(e){
            const date_start = $('#date_start').val(),
                date_end = $('#date_end').val(),
                status = $('#type_trans').val();

            window.location.href = url.main + '?date_start=' + date_start + '&date_end=' + date_end + '&status=' + status;
        });

        $(document).on('click', '.btn-transfer', function(){
            $('#bukti_transfer').modal('show');
            add_image($(this).attr('data-url'));
        });
    });

    
    function render_transfer(data, type, row) {
        if (type == "sort" || type == 'type')
            return data;

        return row.img !== '' ? '<button data-target="bukti_transfer" data-toggle="modal" data-url="'+ row.img + '" type="button" class="btn btn-secondary btn-transfer">Lihat</button>' : '12312 ';
    }

    function render_action(data, type, row){
        if(type == "sort" || type == 'type')
            return data;

        if(parseInt(row.status) == 1){
            return '<button data-toggle="modal" data-target="#konfirmasi" data-id="' + row.id + '" type="button" class="btn btn-primary btn-konfirmasi">Konfirmasi</button>'+
                '<button data-toggle="modal" data-target="#tolak" data-id="' + row.id +'" type="button" class="btn btn-danger btn-tolak">Tolak</button>';
        }else if(parseInt(row.status) == 2){
            return '<button disabled type="button" class="btn btn-success">Berhasil</button>';
        }else{
            return '<button disabled type="button" class="btn btn-danger">Gagal</button>';
        }
    }


    function add_image(url){
        var _img = document.getElementById('data_transfer');
        var newImg = new Image;
        newImg.onload = function() {
            _img.src = this.src;
        }
        newImg.src = url;
    }

</script>
@endsection