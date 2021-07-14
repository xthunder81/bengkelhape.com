@extends('layouts.admin')

@section('titlePage')
Pegawai
@endsection

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <!-- Button Create -->
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route ('admin.pegawai.create') }}"><i
                            class="nav-icon fas fa-plus"></i> Tambah Pegawai</a>
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
                                    <th>Nama Pegawai</th>
                                    <th>Bagian</th>
                                    <th>Kode Pegawai</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allpegawai as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_pegawai }}</td>
                                        <td>{{ $data->nama_bagian }}</td>
                                        <td>{{ $data->kode_pegawai }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_masuk)->format('d-m-Y') }}</td>
                                        <td><a href="{{ route('admin.pegawai.edit', $data->id_pegawai) }}"
                                                class="btn btn-xs btn-primary" data-toggle="tooltip"
                                                data-placement="top" title="Edit Pegawai"><i
                                                    class="fas fa-edit"></i></a>
                                            <form
                                                action="{{ route('admin.pegawai.destroy', $data->id_pegawai) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-xs btn-danger" type="submit"
                                                    onclick="return confirm('Yakin ingin Hapus Bagian ini?')"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus Bagian"><i
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
