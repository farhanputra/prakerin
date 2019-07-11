@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Produk</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('produk.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input class="form-control" type="text" name="nama_produk" id="">
                            </div>
                              <div class="form-group">
                                <label for="">Harga Produk</label>
                                <input class="form-control" type="text" name="harga_produk" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection