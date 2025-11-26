@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Data Barang</h2>
        </div>
        <div class="card-body row">
            <div class="col-12 my-2">
                <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kode Inventaris</th>
                            <th scope="col">Kategori ID</th>
                            <th scope="col">Ruang ID</th>
                            <th scope="col">Tahun Pengadaan</th>
                            <th scope="col">Sumber Dana</th>
                            <th scope="col">Sumber Dana</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_barang }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection