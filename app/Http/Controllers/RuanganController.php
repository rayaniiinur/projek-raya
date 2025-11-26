<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Bangunan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $ruangan = Ruangan::all();
        return view('ruangan.index', ['items' => $ruangan]);
    }

    public function create()
    {
    $bangunan = Bangunan::all();
        return view('ruangan.create', ['bangunan' => $bangunan]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_ruangan' => 'required|string',
            'kode_ruangan' => 'required|string',
            'bangunan_id' => 'required|string',
        ]);

        Ruangan::create($validated);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Ditambahkan!');
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
        $ruangan = Ruangan::find($id);
        return view('ruangan.edit', ['ruangan'=>$ruangan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_ruangan' => 'required|string',
            'kode_ruangan' => 'required|string',
            'bangunan_id' => 'required|string',
        ]);

        $ruangan = Ruangan::find($id);
        $ruangan->update($validated);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Dirubah!');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Ruangan::destroy($id);
        return redirect()->route('Ruangan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
