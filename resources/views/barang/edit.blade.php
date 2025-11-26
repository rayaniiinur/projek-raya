@extends('layouts.app')

@section('title', 'Edit Data Barang')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Edit Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="inputNamaBarang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" id="inputNamaBarang"
                        value="{{ old('nama_barang', $barang->nama_barang) }}"
                        class="form-control @error('nama_barang') is-invalid @enderror">
                    @error('nama_barang')
                        <div id="inputNamaBarangFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputKodeInventaris" class="form-label">Kode Inventaris</label>
                    <input type="text" name="kode_inventaris" id="inputKodeInventaris"
                        value="{{ old('kode_inventaris', $inventaris->kode_inventaris) }}"
                        class="form-control @error('kode_inventaris') is-invalid @enderror">
                    @error('kode_inventaris')
                        <div id="inputKodeInventarisFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputKategoriID" class="form-label">Kategori</label>
                    <select name="kategori_id" id="inputKategoriID" class="form-control @error('kategori_id') is-invalid @enderror">
                        @foreach ($kategori as $ktg)
                            <option value="{{ $ktg->id }}"
                                @if ($barang->kategori->id === $ktg->id) {{ __('selected') }} @endif>{{ $ktg->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    @error('tanah_id')
                        <div id="iinputKategoriFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputRuanganID" class="form-label">Ruangan</label>
                    <select name="ruangan_id" id="inputRuanganID" class="form-control @error('ruangan_id') is-invalid @enderror">
                        @foreach ($ruangan as $rgn)
                            <option value="{{ $rgn->id }}"
                                @if ($barang->ruangan->id === $rgn->id) {{ __('selected') }} @endif>{{ $rgn->nama_ruangan }}
                            </option>
                        @endforeach
                    </select>
                    @error('tanah_id')
                        <div id="iinputKategoriFeedback" class="invalid-feedback">
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