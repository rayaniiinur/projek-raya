<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $barang = Barang::all();
        return view('barang.index', ['items' => $barang]);
    }

    public function create()
    {
    $kategori = \App\Models\Kategori::all();
    $ruangan  = \App\Models\Ruangan::all();
    return view('barang.create', compact('kategori', 'ruangan'));
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'nama_barang' => 'required|string',
            'kode_inventaris' => 'required|string',
            'kategori_id' => 'required|string|exists:kategori,id',
            'ruangan_id' => 'required|string|exists:ruangan,id',
            'tahun_pengadaan' => 'required|string',
            'sumber_dana' => 'required|string',
            'kondisi' => 'required|string',
        ]);

        Barang::create($validated);
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Ditambahkan!');
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
        $barang = Barang::find($id);
        return view('barang.edit', ['barang'=>$barang]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) 
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string',
            'kode_inventaris' => 'required|string',
            'kategori_id' => 'required|string|exists:kategori,id',
            'ruangan_id' => 'required|string|exists:ruangan,id',
            'tahun_pengadaan' => 'required|string|exists:tanah',
            'sumber_dana' => 'required|string',
            'kondisi' => 'required|string',
        ]);

        $barang = Barang::find($id);
        $barang->update($validated);
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Dirubah!');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Barang::destroy($id);
        return redirect()->route('Barang.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
