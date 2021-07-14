@extends('layouts.admin')

@section('titlePage')
Tambah Bagian
@endsection

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <!-- form start -->
            <form method="post" action="{{ route('admin.bagian.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="name">Nama Bagian :</label>
                                <input type="text" class="form-control @error('nama_bagian') is-invalid @enderror"
                                    name="nama_bagian" value="{{ old('nama_bagian') }}"
                                    placeholder="Nama Bagian" />
                                @error('nama_bagian')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="name">Kode Bagian :</label>
                                <input type="text" class="form-control @error('kode_bagian') is-invalid @enderror"
                                    name="kode_bagian" value="{{ old('kode_bagian') }}"
                                    placeholder="Kode Bagian" />
                                @error('kode_bagian')
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
