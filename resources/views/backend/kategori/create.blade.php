@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-11">
            <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="" class="form-control" required>
                </div>
                    <button type="submit" class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('kategori.index')}}" role="button">Kembali</a>
            </form>
        </div>
    </div>              
</div>
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>