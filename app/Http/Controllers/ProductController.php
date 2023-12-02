<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use App\Models\Kategori;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Bunga::all();
        return view('dsadmin.dashboard.datablog ', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = Kategori::all();
        return view('dsadmin.dashboard.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Bunga $bunga)
    {
        //
        $rules = [
            'kategori_id' => 'required',
            'title' => 'required|unique:bungas|max:255',
            'harga' => 'required|numeric|min:0',
            'excrept' => 'required',
            'deskripsi' => 'required'
        ];

        if($request->slug != $bunga->slug) {
            $rules['slug'] = 'required|unique:bungas';
        }

        $validateDate = $request->validate($rules);

        $data = Bunga::create($validateDate);
        return redirect()->route('crud')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bunga $bunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bunga $bunga)
    {
        //
        $data = Kategori::all();
        return view('dsadmin.dashboard.update', compact('bunga', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        //
        $data = Bunga::find($slug);
        $data->update($request->all());

        return redirect()->route('crud')->with('success', 'Data Berhasil Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bunga $bunga)
    {
        //
        Bunga::destroy($bunga->id);
        return redirect()->route('crud')->with('success', 'Data Berhasil Dihapus!');

    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bunga::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

}
