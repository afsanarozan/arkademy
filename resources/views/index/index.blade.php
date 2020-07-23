
@extends('layout/main')

@section('title','home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
          <h1 class="mt-3">Sistem CRUD</h1>
          <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambah">Tambah Barang</a>
        </div>
  
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produk as $pdk)
    <tr>
      <th>{{$loop -> iteration}}</th>
      <td>{{$pdk -> nama_produk}}</td>
      <td>{{$pdk -> keterangan}}</td>
      <td>Rp : {{$pdk -> harga}}</td>
      <td>{{$pdk -> jumlah}}</td>
      <td>
      <form action="{{$pdk -> id}}" method="post" class="d-inline">
        @method('delete')
        @csrf 
        <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
        <a href="{{ $pdk -> id }}/edit" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i>Edit</a>
     
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <div class="modal-body">
            <form action="/" method="post" class="user">
            @csrf
          <div class="form-group">
            <label>Nama Produk</label>
              <input type="text" class="form-control" placeholder="" name="nama_produk" required="" >
          </div>  
          <div class="form-group">
            <label>Keterangan</label>
              <input type="text" class="form-control" placeholder="" name="keterangan" required="">
          </div> 
          <div class="form-group">
            <label>Harga</label>
              <input type="number" class="form-control" placeholder="" name="harga" required="">
          </div> 
          <div class="form-group">
            <label>Jumlah</label>
              <input type="number" class="form-control" placeholder="" name="jumlah" required="">
          </div> 
            <button class="btn btn-info"><i class="fa fa-user-plus"></i>Tambah Produk</button>
            </form>
          </div>
        </div>
      </div>
    </div>






@endsection

