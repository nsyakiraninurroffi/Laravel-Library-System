@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Buku</h2>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode_buku" class="form-label">Kode Buku</label>
            <input type="text" name="kode_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" name="tahun" class="form-control" required>
        </div>
<div class="mb-3">
    <label for="id_kategori" class="form-label">Kategori</label>
    <select name="id_kategori" id="id_kategori" class="form-select" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
        @endforeach
    </select>
</div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
