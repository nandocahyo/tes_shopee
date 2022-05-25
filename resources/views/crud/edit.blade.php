<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('CRUDController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="nama" name="nama" value="{{$crud->nama}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Deskripsi</label>
      <div class="col-sm-10">
        <textarea name="deskripsi" rows="8" cols="80">{{$crud->deskripsi}}</textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Harga</label>
      <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="harga" name="harga" value="{{$crud->harga}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Stok</label>
      <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="stok" name="stok" value="{{$crud->stok}}">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
