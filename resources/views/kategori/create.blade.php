@extends('layouts.app')

@section('title', 'Tambah Data Kategori')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Tambah Data Kategori</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="inputNamaKategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="inputNamaKategori" aria-describedby="inputNamaKategoriFeedback"
                        value="{{ old('nama_kategori') }}"
                        class="form-control @error('nama_kategori') is-invalid @enderror">
                    @error('nama_kategori')
                        <div id="inputNamaKategoriFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection