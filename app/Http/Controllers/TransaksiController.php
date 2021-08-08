<?php

namespace App\Http\Controllers;

use App\transaksi;
use App\detail_transaksi;
use App\Http\Controllers\Controller;
use App\pegawai;
use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viewTransaksi = DB::table('detail_transaksi')
                            ->join('transaksi', 'transaksi.id_transaksi', '=', 'detail_transaksi.transaksi_id')
                            ->join('service', 'service.id_service', '=', 'transaksi.service.id')
                            ->join('pegawai', 'pegawai.id_pegawai', '=', 'transaksi.admin_id')
                            ->select('transaksi.id_transaksi', 'service.nama_service',
                                'transaksi.no_transaksi', 'transaksi.tanggal_terima', 'transaksi.merek',
                                'pegawai.nama_pegawai')
                            ->latest('created_at')
                            ->first();

        return view('admin.transaksi.index', compact('viewTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $service = service::get();
        $pegawai = pegawai::get();

        return view('admin.transaksi.create', compact('service', 'pegawai'));
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
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
