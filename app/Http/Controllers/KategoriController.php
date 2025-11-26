<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $kategori = Kategori::all();
        return view('kategori.index', ['items' => $kategori]);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_kategori' => 'required|string',
        ]);

        Kategori::create($validated);
        return redirect()->route('kategori.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', ['kategori'=>$kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string',
        ]);

        $kategori = Kategori::find($id);
        $kategori->update($validated);
        return redirect()->route('kategori.index')->with('success', 'Data Berhasil Dirubah!');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Kategori::destroy($id);
        return redirect()->route('Kategori.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
