<?php

namespace App\Http\Controllers;

use App\bagian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bagian = bagian::get();
        return view('admin.bagian.index', compact('bagian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.bagian.create');
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
            'nama_bagian' => 'required',
            'kode_bagian' => 'unique:bagian|required',
        ]);

        bagian::create([
            'nama_bagian' => ucwords(strtolower($request->nama_bagian)),
            'kode_bagian' => ucwords(strtoupper($request->kode_bagian)),
        ]);

        return redirect(route ('admin.bagian'))->with(['jenis' => 'success','pesan' => 'Berhasil Menambah Bagian']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function show(bagian $bagian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bagian  $bagian
     * @return \Illuminate\Http\Response
     */


    public function status ($id) {
        $bagian = bagian::findOrFail ($id);

    }

    public function edit($id)
    {
        //
        $bagian = bagian::findOrFail ($id);
        return view('admin.bagian.edit', compact('bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_bagian' => 'required',
            'kode_bagian' => 'unique:bagian|required',
        ]);

        bagian::find($id)->update([
            'nama_bagian' => ucwords(strtolower($request->nama_bagian)),
            'kode_bagian' => ucwords(strtoupper($request->kode_bagian)),
        ]);

        return redirect(route ('admin.bagian'))->with(['jenis' => 'success','pesan' => 'Berhasil Mengubah Bagian']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bagian = bagian::findOrFail ($id);
        $bagian->delete();
        return redirect(route ('admin.bagian'))->with(['jenis' => 'success','pesan' => 'Berhasil Menghapus Bagian']);
    }
}
