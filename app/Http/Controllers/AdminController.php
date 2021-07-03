<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\pegawai;
use App\detail_pegawai;
use App\bagian;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('admin.home');
    }

    public function pegawaiView ()
    {
        $allpegawai = DB::table('detail_pegawai')
                    ->join('pegawai', 'pegawai.id_pegawai','=','detail_pegawai.pegawai_id')
                    ->join('bagian', 'bagian.id_bagian','=','detail_pegawai.bagian_id')
                    ->select('pegawai.id_pegawai','pegawai.nama_pegawai','bagian.nama_bagian','detail_pegawai.kode_pegawai', 'pegawai.tanggal_masuk')
                    ->get();

        return view('admin.pegawai.index', compact('allpegawai'));
    }

    public function pegawaiCreate  ()
    {
        $bagian = bagian::get();
        return view('admin.pegawai.create', compact('bagian'));
    }

    public function pegawaiStore (Request $request)
    {
        $request->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:6',
            'nama_pegawai' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_masuk' => 'required',
            'kelurahan_pegawai' => 'required',
            'kecamatan_pegawai' => 'required',
            'kabupaten_pegawai' => 'required',
            'provinsi_pegawai' => 'required',
            'telpon_pegawai' => 'required',
            'bagian_id' => 'required',
        ]);

        $pegawai = pegawai::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_pegawai' => ucwords(strtolower($request->nama_pegawai)),
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tanggal_masuk' => $request->tanggal_masuk,
            'kelurahan_pegawai' => $request->kelurahan_pegawai,
            'kecamatan_pegawai' => $request->kecamatan_pegawai,
            'kabupaten_pegawai' => $request->kabupaten_pegawai,
            'provinsi_pegawai' => $request->provinsi_pegawai,
            'telpon_pegawai' => $request->telpon_pegawai,
        ]);

        detail_pegawai::create([
            'pegawai_id' => $pegawai->id_Pegawai,
            'bagian_id' => $request->bagian_id,
        ]);

        return redirect(route ('admin.pegawai'))->with(['jenis' => 'success','pesan' => 'Berhasil Menambah Pegawai']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
