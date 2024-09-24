@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
            <div class="col">
                <input type="text" name="pemesanan" class="form-control" placeholder="Pemesanan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
            </div>
            {{-- <div class="col">
                <input type="text" name="satuan" class="form-control" placeholder="satuan">
            </div> --}}
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>
@endsection