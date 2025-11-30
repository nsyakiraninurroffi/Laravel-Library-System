@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">Daftar Buku</h3>
    <a href="{{ route('buku.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Tambah Buku
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped table-hover shadow-sm">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($bukus as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->kode_buku }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->tahun }}</td>
            <td>{{ $buku->kategori->nama ?? '-' }}</td>
            <td>
                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus buku ini?')" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" class="text-center text-muted">Belum ada data buku</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
