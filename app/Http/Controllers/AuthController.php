<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;




class AuthController extends Controller
{
    public function login(Request $request){

        $validate = Validator::make($request->all(),[
            'username' => 'string|required',
            'password' => 'string|required',
        ]);

        if ($validate->fails()) {
            return redirect('login')-> with('error', 'validasi gagal');
        }

        $creadentials = $request->only('username','password');


        if (Auth::attempt($creadentials)) {
        // khusus yang ada role nya
        // dd(Auth()->user()->role);
        if  (Auth::user()->role == "admin"){
            return redirect()->route('dashboard.admin');
        } elseif (Auth::user()->role == "pengguna"){
            return redirect('/');
        }
            return redirect('/login');
        } else {
            return back()->with('error', 'password salah');
        }
}
}