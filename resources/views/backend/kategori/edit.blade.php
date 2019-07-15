@extends('layouts.app')


@section('content')
		
<div class="container">
    <div class="row">
        <div class="col-lg-11">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="" class="form-control" value="{{ $kategori->nama_kategori }}" >
            </div>
            <button type="submit" class="btn btn-md btn-info">Simpan</button>
            <a name="" id="" class="btn btn-md btn-warning" href="{{route('kategori.index')}}" role="button">Kembali</a>
        </form>
        </div>
    </div>              
</div>