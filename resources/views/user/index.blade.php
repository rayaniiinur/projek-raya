@extends('layouts.app')

@section('title', 'Data Users')

@section('content')

{{-- Tambah User (hanya admin) --}}
@auth
<div>
    <a href="{{ route('users.create') }}" class="btn-add">Tambah</a>
</div>
@endauth

{{-- TABLE --}}
<table class="table-clean">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($user as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

            <td>
                @auth
                    Admin
                @else
                    User
                @endauth
            </td>

            <td>
                {{-- Aksi hanya untuk admin --}}
                @auth

                <a href="{{ route('users.edit', $user->id) }}" class="btn-edit">Edit</a>

                <form action="{{ route('users.destroy', $user->id) }}"
                      method="POST"
                      style="display:inline-block"
                      onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
                @endauth
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection