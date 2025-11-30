@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Kategori</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                           value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
                    @error('nama_kategori')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
