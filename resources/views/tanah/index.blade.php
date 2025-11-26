@extends('layouts.app')

@section('title', 'Data Tanah')

@section('content')
<div class="card m-4 shadow">
    <div class="card-header bg-primary text-white">
        <h2 class="card-title text-center m-0">Data Tanah</h2>
    </div>

    <div class="card-body">

        <!-- Tombol Tambah -->
        <div class="mb-3 text-end">
            <a href="{{ route('tanah.create') }}" class="btn btn-success">
                + Tambah Data
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama Tanah</th>
                        <th>Kode Tanah</th>
                        <th>Luas</th>
                        <th>No Sertifikat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_tanah }}</td>
                        <td>{{ $item->kode_tanah }}</td>
                        <td>{{ $item->luas }}</td>
                        <td>{{ $item->no_sertifikat }}</td>
                        <td class="text-center">

                            <!-- Edit -->
                            <a href="{{ route('tanah.edit', $item->id) }}" 
                               class="btn btn-sm btn-primary me-1">
                                Edit
                            </a>

                            <!-- Hapus -->
                            <form action="{{ route('tanah.destroy', $item->id) }}" 
                                  method="post" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus data ini?')">
                                    Hapus
                                </button>
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
