@extends('backoffice.layouts.main')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Histori Transaksi
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        
                        <th scope="col">Username</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Type</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            
                            <td>{{ $item->User->name }} </td>
                            <td>{{ $item->created_at }} </td>
                            <td>
                                @if ($item->type == 1)
                                    Deposit
                                @else
                                    Withdraw
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 1)
                                    @currency($item->nominal)
                                @elseif ($item->status == 2)
                                    @currency($item->nominal)
                                @else
                                    <strike>@currency($item->nominal)</strike>
                                @endif
                            </td>
                            <td>
                                @if ($item->type == 1)
                                    {{ $item->Databank->nama_bank ?? '' }} <span style="color: red">{{ $item->  alasan }}</span> 
                                @else
                                    {{ $item->keterangan ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if ($item->  status == 1)
                                    <button class="btn btn-warning" disabled="disabled">Progress</button>
                                @elseif ($item->  status == 2)
                                    <button class="btn btn-success" disabled="disabled">Sukses</button>
                                @else
                                    <button class="btn btn-danger" disabled="disabled">Gagal</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
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
        });
    </script>
@endsection
