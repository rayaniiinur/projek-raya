@extends('layouts.app')

@section('title', 'Data Ruangan')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Data Ruangan</h2>
        </div>
        <div class="card-body row">
            <div class="col-12 my-2">
                <a href="{{ route('ruangan.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Ruangan</th>
                            <th scope="col">Kode Ruangan</th>
                            <th scope="col">Bangunan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_ruangan }}</td>
                                <td>{{ $item->kode_ruangan }}</td>
                                <td>{{ $item->bangunan_id }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('ruangan.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('ruangan.destroy', $item->id) }}" method="post">
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