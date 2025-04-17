@extends('master')

@section('judul', 'Create Item')

@section('create')
<div class="container">
    <h2>Create Item</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NamaBarang">Nama Barang:</label>
            <input type="text" class="form-control" id="NamaBarang" name="Nama Barang" required>
        </div>
        <div class="form-group">
            <label for="KodeBarang">Kode Barang:</label>
            <input type="number" class="form-control" id="KodeBarang" name="Kode Barang">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
