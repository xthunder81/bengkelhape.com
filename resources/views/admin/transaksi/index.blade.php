@extends('layouts.admin')

@section('titlePage')
Transaksi
@endsection

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <!-- Button Create -->
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route ('admin.transaksi.create') }}"><i
                            class="nav-icon fas fa-plus"></i> Tambah Transaksi</a>
                    @if(Session::has('pesan'))
                        <p class="alert alert-{{ Session::get('jenis') }} mt-3">
                            {{ Session::get('pesan') }}</p>
                    @endif
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatables" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    {{-- <th>Tanggal Transaksi</th> --}}
                                    <th>No Transaksi</th>
                                    <th>Service</th>
                                    <th>Merek</th>
                                    <th>Nama Customer</th>
                                    <th>Admin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($viewTransaksi as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{ \Carbon\Carbon::parse($data->tanggal_terima)->format('d-m-Y') }}</td> --}}
                                        <td>{{ $data->no_transaksi }}</td>
                                        <td>{{ $data->nama_service }}</td>
                                        <td>{{ $data->merek }}</td>
                                        <td>{{ $data->nama_customer }}</td>
                                        <td>{{ $data->adm_nama }}</td>
                                        <td><a href="{{ route('admin.transksi.edit', $data->id_transaksi) }}"
                                                class="btn btn-xs btn-primary" data-toggle="tooltip"
                                                data-placement="top" title="Edit Transaksi"><i
                                                    class="fas fa-edit"></i></a>
                                            <form
                                                action="{{ route('admin.transaksi.destroy', $data->id_transaksi) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-xs btn-danger" type="submit"
                                                    onclick="return confirm('Yakin ingin Hapus Transaksi ini?')"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus Transaksi"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>
@endsection
