@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Pemesanan </label>
                <input type="text" name="pemesanan" class="form-control" placeholder="Pemesanan" value="{{ $product->pemesanan }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="Nama produk" value="{{ $product->nama_produk }}" >
            </div>
            {{-- <div class="col mb-3">
                <label class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control" placeholder="Satuan" value="{{ $product->satuan }}" >
            </div> --}}
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection