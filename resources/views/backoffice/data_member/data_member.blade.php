@extends('backoffice.layouts.main')
@section('content')
    <div class="pt-3">
        <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Member Baru</button>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Data Member
        </div>
        <div class="card-body">
            @include('backoffice.layouts.msg_bar')
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">Tanggal</th>
                            <th>Username</th>
                            <th>Ref</th>
                            <th>Saldo</th>
                            <th>Email</th>
                            <!-- <th>No WA</th> -->
                            <th>Bank</th>
                            <th>Nama Rekening</th>
                            <th>Nomor Rekening</th>
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_member as $item)
                            <?php
                            $saldo = isset($item->saldo[0]) ? $item->saldo[0]->saldo : 0;
                            $bonus = isset($item->saldo[0]) ? $item->saldo[0]->bonus : 0;
                            ?>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->updated_at }} </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->ref_code }}</td>
                                <td>{{ number_format($saldo + $bonus) }}</td>
                                <td>{{ $item->email }}</td>
                                <!-- <td>{{ $item->telp }}</td> -->
                                <td>{{ $item->bank ?? '' }}</td>
                                <td>{{ $item->nama_rek }}</td>
                                <td>{{ $item->no_rek }}</td>
                                
                                <td>
                                    <button class="btn btn-secondary btn-sm" onClick="hapus"><i class="fa fa-unlock-alt"></i></button>
                                    <button data-toggle="modal" data-target="#tambah" data-member="{{ json_encode($item) }}" type="button"
                                    class="btn btn-success btn-ubah">Ubah</button>
                                    
                                </td>
                                    <!-- <div class="modal fade" id="hapus_data_member{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('data_member.destroy', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Member</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin akan manghapus data member ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modalUserBaru"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('data_member.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('POST')
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                        <input id="id" type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="judul">Name</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="judul">Password</label>
                            <input id="password" type="text" class="form-control" name="password" value="">
                        </div>
                        
                        <div class="form-group">
                            <label for="keterangan">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">WA</label>
                            <input id="telp" type="text" class="form-control" name="telp" value="">
                        </div>
                        
                        <div class="form-group">
                            <label for="keterangan">Reff Code</label>
                            <input id="ref_code" type="text" class="form-control" name="ref_code" value="">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Nama Rek</label>
                            <input id="nama_rek" type="text" class="form-control" name="nama_rek" value=""
                                id="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Bank</label>
                            <select id="bank" name="bank" class="form-control">
                            @foreach ($data_bank as $item)
                                <option value="{{ $item->nama_bank }}" readonly>{{ $item->nama_bank }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">No Rek</label>
                            <input id="no_rek" type="text" class="form-control" name="no_rek" value=""
                                id="keterangan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit_delete" class="btn btn-danger" data-dismiss="modal">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        
        $(document).ready(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            $(document).on('click', '.btn-ubah', function(e){
                const data_member = JSON.parse($(this).attr('data-member'));

                $('#modal_member').text('User Ubah');
                $('#id').val(data_member.id);
                $('#nama').val(data_member.name);
                $('#nama').attr('disabled', true);
                $('#email').val(data_member.email);
                // $('#telp').val(data_member.telp);
                $('#ref_code').val(data_member.ref_code);
                $('#nama_rek').val(data_member.nama_rek);
                $('#bank').val(data_member.bank);
                $('#no_rek').val(data_member.no_rek);
                
            });

            $(document).on('click', '.btn-add', function(e){

                $('#modal_member').text('User Tambah');
                $('#id').val('');
                $('#nama').val('');
                $('#nama').attr('disabled', false);
                $('#email').val('');
                // $('#telp').val('');
                $('#ref_code').val('');
                $('#nama_rek').val('');
                $('#bank').val('');
                $('#no_rek').val('');
            });
        });

        
    </script>
@endsection

