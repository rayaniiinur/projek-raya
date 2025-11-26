@extends('layouts.app')

@section('title', 'Tambah Data Ruangan')

@section('content')
    <div>
        <a href="{{ route('ruangan.index') }}">Kembali</a>
    </div>
    <form action="{{ route('ruangan.store') }}" method="post">
        @csrf
        <div>
            <label for="inputNamaRuangan">Nama Ruangan</label>
            <input type="text" name="nama_ruangan" id="inputNamaRuangan" value="{{ old('nama_ruangan') }}">
        </div>
        <div>
            <label for="inputKodeRuangan">Kode Ruangan</label>
            <input type="text" name="kode_ruangan" id="inputKodeRuangan" value="{{ old('kode_ruangan') }}">
        </div>
        <div class="mb-2">
                    <label for="inputBangunan" class="form-label">Bangunan</label>
                    <select name="bangunan_id" id="inputBangunan" class="form-control @error('bangunan_id') is-invalid @enderror" aria-describedby="iinputBangunanFeedback">
                        @foreach ($bangunan as $bngn)
                            <option value="{{ $bngn->id }}">{{ $bngn->nama_bangunan }}</option>
                        @endforeach
                    </select>
                    @error('bangunan_id')
                        <div id="iinputBangunanFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection