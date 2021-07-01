<?php

namespace App\Http\Controllers;

use App\service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $service = service::get();
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.service.create');
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
        $request->validate([
            'nama_service' => 'required',
            'kode_service' => 'unique:service|required',
        ]);

        service::create([
            'nama_service' => ucwords(strtolower($request->nama_service)),
            'kode_service' => ucwords(strtoupper($request->kode_service)),
        ]);

        return redirect(route ('admin.service'))->with(['jenis' => 'success','pesan' => 'Berhasil Menambah service']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $service = service::findOrFail ($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_service' => 'required',
            'kode_service' => 'unique:service|required',
        ]);

        service::find($id)->update([
            'nama_service' => ucwords(strtolower($request->nama_service)),
            'kode_service' => ucwords(strtoupper($request->kode_service)),
        ]);

        return redirect(route ('admin.service'))->with(['jenis' => 'success','pesan' => 'Berhasil Mengubah service']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $service = service::findOrFail ($id);
        $service->delete();
        return redirect(route ('admin.service'))->with(['jenis' => 'success','pesan' => 'Berhasil Menghapus service']);
    }
}
