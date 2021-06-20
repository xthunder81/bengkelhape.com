<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('admin.login');
    }

    // public function postLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'nip' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if(\Auth()->guard('admin')->attempt(['nip' => $request->nip, 'password' => $request->password])){
    //         return redirect()->route('admin.home');
    //     }

    //     return redirect()->back()->with(['jenis' => 'danger','pesan' => 'Gagal login. NIP atau Password salah']);
    // }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('admin.login');
    }
}
