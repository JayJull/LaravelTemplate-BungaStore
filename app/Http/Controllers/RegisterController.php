<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\String\ByteString;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validasi form daftar
        $validateData = $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // password di enkripsi
        $validateData['password'] = bcrypt($validateData['password']);

        // pengiriman ke database
        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Berhasil!');
    }
}
