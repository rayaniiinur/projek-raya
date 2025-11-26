@extends('layouts.app')

@section('title', 'Edit Data Ruangan')

@section('content')
    <div>
        <a href="{{ route('ruangan.index') }}">Kembali</a>
    </div>
    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="inputNamaRuangan">Nama Bangunan</label>
            <input type="text" name="nama_ruangan" id="inputNamaRuangan" value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}">
        </div>
        <div>
            <label for="inputKodeRuangan">Kode Bangunan</label>
            <input type="text" name="kode_ruangan" id="inputKodeRuangan" value="{{ old('kode_ruangan', $ruangan->kode_ruangan) }}">
        </div>
        <div>
            <label for="inputBangunanID">BangunanID</label>
            <input type="text" name="bangunan_id" id="inputBangunanID" value="{{ old('bangunan_id', $ruangan->bangunan_id) }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection