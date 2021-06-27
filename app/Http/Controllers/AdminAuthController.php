<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(\Auth()->guard('pegawai')->attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('welcome');
        }

        return redirect()->back()->with(['jenis' => 'danger','pesan' => 'Gagal login. Username atau Password salah']);
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('admin.login');
    }
}
