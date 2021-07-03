@extends('layouts.admin')

@section('titlePage')
Tambah Pegawai
@endsection

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <!-- form start -->
            <form method="post" action="{{ route('admin.pegawai.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h3 class=""><b>Data Pegawai</b></h3>
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Username"
                                    name="nama_pegawai" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_pegawai">Nama Pegawai</label>
                                <input class="form-control" id="nama_pegawai" placeholder="Nama Lengkap" name="nama_pegawai"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir"
                                    placeholder="Masukkan Tempat Lahir" name="tempat_lahir"
                                    value="{{ $siswa->tempat_lahir }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control cdp" id="tanggal_lahir"
                                    placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir"
                                    value="{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('Y-m-d') }}"
                                    required>
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
