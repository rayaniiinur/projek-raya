@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title text-center">Tambah Data</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.store') }}" method="post">
            @csrf

            {{-- Nama Barang --}}
            <div class="mb-2">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang"
                       class="form-control @error('nama_barang') is-invalid @enderror"
                       value="{{ old('nama_barang') }}">
                @error('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Kode Inventaris --}}
            <div class="mb-2">
                <label class="form-label">Kode Inventaris</label>
                <input type="text" name="kode_inventaris"
                       class="form-control @error('kode_inventaris') is-invalid @enderror"
                       value="{{ old('kode_inventaris') }}">
                @error('kode_inventaris')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Kategori --}}
            <div class="mb-2">
                <label class="form-label">Kategori</label>
                <select name="kategori_id"
                        class="form-control @error('kategori_id') is-invalid @enderror">
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
                @error('kategori_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Ruangan --}}
            <div class="mb-2">
                <label class="form-label">Ruangan</label>
                <select name="ruangan_id"
                        class="form-control @error('ruangan_id') is-invalid @enderror">
                    @foreach ($ruangan as $r)
                        <option value="{{ $r->id }}">{{ $r->nama_ruangan }}</option>
                    @endforeach
                </select>
                @error('ruangan_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label class="form-label">Tahun Pengadaan</label>
                <input type="date" name="tahun_pengadaan"
                       class="form-control @error('tahun_pengadaan') is-invalid @enderror"
                       value="{{ old('tahun_pengadaan') }}">
                @error('tahun_pengadaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label class="form-label">Kode Inventaris</label>
                <input type="text" name="kode_inventaris"
                       class="form-control @error('kode_inventaris') is-invalid @enderror"
                       value="{{ old('kode_inventaris') }}">
                @error('kode_inventaris')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- Tombol --}}
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
            </div>

        </form>
    </div>
</div>
@endsection
