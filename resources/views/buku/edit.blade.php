@extends('layouts.app')

@section('content')
    <h3>Edit Buku</h3>
    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('buku._form')
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
