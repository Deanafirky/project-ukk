@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Pemesanan</label>
            <input type="text" name="pemesanan" class="form-control" placeholder="Pemesanan" value="{{ $product->pemesanan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value="{{ $product->nama_produk }}" readonly>
        </div>
        {{-- <div class="col mb-3">
            <label class="form-label">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Satuan" value="{{ $product->satuan }}" readonly>
        </div> --}}
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection