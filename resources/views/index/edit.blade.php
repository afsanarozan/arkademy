
@extends('layout.main')

@section('title','home')

@section('container')
<div class="container">
    <div class="row mb-2">
        <div class="col-sm-6">
        <form action="/{{$produk -> id}}" method="post">
            @method('patch')
            @csrf 
            <div class="form-group">
                    <label>id</label>
                    <input type="text" class="form-control" required="" placeholder="" name="id" 
                    Value="{{$produk -> id}}" disabled>
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" placeholder="" class="form-control" required="" name="nama_produk"
                    Value="{{$produk -> nama_produk}}">
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" placeholder="" class="form-control" required="" name="keterangan"
                    Value="{{$produk -> keterangan}}">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" placeholder="" required="" name="harga"
                    Value="{{$produk -> harga}}">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" placeholder="" required="" name="jumlah"
                    Value="{{$produk -> jumlah}}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            
        </div>
    
    </div>

</div>
@endsection