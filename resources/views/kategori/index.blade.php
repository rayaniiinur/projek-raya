@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Data Kategori</h2>
        </div>
        <div class="card-body row">
            <div class="col-12 my-2">
                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_kategori }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
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