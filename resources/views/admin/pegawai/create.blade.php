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
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" placeholder="Username" name="username"
                                    value="{{ old('username') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Masukkan Password" aria-describedby="basic-addon2" required data-eye>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_pegawai">Nama Pegawai</label>
                                <input class="form-control" id="nama_pegawai" placeholder="Nama Lengkap"
                                    name="nama_pegawai" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" style="width: 100%;" name="jenis_kelamin"
                                required>
                                <option value="none" selected disabled hidden> Pilih Jenis Kelamin </option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control cdp" id="tanggal_lahir" placeholder="Tanggal Lahir"
                                name="tanggal_lahir" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control cdp" id="tanggal_masuk" placeholder="Tanggal Masuk"
                                name="tanggal_masuk" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="alamat_pegawai">Alamat</label>
                                <textarea class="form-control" id="alamat_pegawai" placeholder="Alamat"
                                    name="alamat_pegawai" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kelurahan_pegawai">Kelurahan</label>
                            <input class="form-control" id="kelurahan_pegawai" placeholder="Kelurahan"
                                name="kelurahan_pegawai" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kecamatan_pegawai">Kecamatan</label>
                            <input class="form-control" id="kecamatan_pegawai" placeholder="Kecamatan"
                                name="kecamatan_pegawai" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kabupaten_pegawai">Kabupaten / Kota</label>
                            <input class="form-control" id="kabupaten_pegawai" placeholder="Kabupaten / Kota"
                                name="kabupaten_pegawai" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="provinsi_pegawai">Provinsi</label>
                            <input class="form-control" id="provinsi_pegawai" placeholder="Provinsi"
                                name="provinsi_pegawai" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telpon_pegawai">Telpon</label>
                            <input class="form-control" id="telpon_pegawai" placeholder="Telpon" name="telpon_pegawai"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bagian_id">Jenis Kelamin</label>
                            <select id="bagian_id" class="form-control" style="width: 100%;" name="bagian_id" required>
                                <option value="none" selected disabled hidden> Pilih Bagian </option>
                                @foreach( $bagian as $data )
                                    <option value="{{ $data->id_bagian }}">{{ $data->nama_bagian }}</option>
                                @endforeach
                            </select>
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
