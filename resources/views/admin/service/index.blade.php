@extends('layouts.admin')

@section('titlePage')
Service
@endsection

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <!-- Button Create -->
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route ('admin.service.create') }}"><i
                            class="nav-icon fas fa-plus"></i> Tambah Service</a>
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
                                    <th>Nama Service</th>
                                    <th>Kode Service Service</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($service as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_service }}</td>
                                        <td>{{ $data->kode_service }}</td>
                                        <td><a href="{{ route('admin.service.edit', $data->id_service) }}"
                                                class="btn btn-xs btn-primary" data-toggle="tooltip"
                                                data-placement="top" title="Edit Nama Service"><i
                                                    class="fas fa-edit"></i></a>
                                            <form
                                                action="{{ route('admin.service.destroy', $data->id_service) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-xs btn-danger" type="submit"
                                                    onclick="return confirm('Yakin ingin Hapus Service ini?')"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus Service"><i
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
