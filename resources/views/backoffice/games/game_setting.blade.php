@extends('backoffice.layouts.main')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Games List
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="tambah_banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ URL::to('banner') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Banner</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="form-text text-muted">Judul
                                                    :</label>
                                                <input name="nama" type="text" class="form-control" placeholder="Judul Banner" value="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="form-text text-muted">Gambar
                                                    Banner :</label>
                                                <input name="gambar" type="file" class="form-control uploads" accept="image/png, image/jpg, image/jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="status" value="1">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">

            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="text-center">Provider</th>
                        <th class="text-center">Game ID</th>
                        <th class="text-center">Game</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Locked</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($game_list as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->provider }}</td>
                        <td>{{ $item->game_id }}</td>
                        <td>{{ $item->game_name }}</td>
                        <td>{{ $item->category }}</td>
                        <td  class="text-center">
                            <img src="{{ $item->image_is_url === 1 ? $item->image : asset($item->image) }}" alt="{{ $item->game_name }}" style="max-width: 120px">
                        </td>
                        <td>
                            @if ($item->status == 1)
                            <span class="badge badge-success">Aktif</span>
                            @else
                            <span class="badge badge-danger">Terkunci</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->game_locked == 0)
                            <a href="{{ URL::to('game_setting_lock').'?game_id='.$item->id }}" class="btn btn-dark"><i class="fas fa-eye-slash"></i> Kunci</a>
                            @else
                            <a href="{{ URL::to('game_setting_unlock').'?game_id='.$item->id }}" class="btn btn-primary"><i class="fas fa-eye"></i> Buka Kunci</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
            bAutoWidth: false,
            aoColumns: [{
                    sWidth: '5%'
                },
                {
                    sWidth: '10%'
                },
                {
                    sWidth: '15%'
                },
                {
                    sWidth: '10%'
                },
                {
                    sWidth: '10%'
                },
                {
                    sWidth: '10%'
                },
                {
                    sWidth: '10%'
                },
                {
                    sWidth: '10%'
                },
            ]
        });
    })
</script>
@endsection