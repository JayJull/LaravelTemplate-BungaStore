<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $data = Kategori::all();
        $active = 'blog';
        return view('dsguest.kategori', compact('data', 'active'));
    }

    public function single(Kategori $kategori)
    {
        return view('dsguest.singlekategori', [
            'title' => $kategori->name,
            'blog' => $kategori->bunga,
            'active' => 'blog',
            'kategori' => $kategori->name
        ]);
    }

}