@extends('layouts.admin')

@section('titlePage')
Tambah Service
@endsection

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <!-- form start -->
            <form method="post" action="{{ route('admin.service.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="name">Nama Service :</label>
                                <input type="text" class="form-control @error('nama_service') is-invalid @enderror"
                                    name="nama_service" value="{{ old('nama_service') }}"
                                    placeholder="Nama Service" />
                                @error('nama_service')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="name">Kode Service :</label>
                                <input type="text" class="form-control @error('kode_service') is-invalid @enderror"
                                    name="kode_service" value="{{ old('kode_service') }}"
                                    placeholder="Kode Service" />
                                @error('kode_service')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">

    </div>
    <!--/.col (right) -->
</div>

@endsection
