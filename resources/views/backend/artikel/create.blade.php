@extends('layouts.app')


@section('content')
	<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Judul Artikel</label>
              <input type="text" name="judul" id="" class="form-control" aria-describedby="helpId" required>
            </div>
                  <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" id="texteditor" cols="30" rows="5" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nama kategori</label>
                    <select name="kategori_id" class="form-control" required>
                        @foreach($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Tag</label>
                      <select name="tag[]" class="form-control multiple" multiple required>
                        @foreach($tag as $data)
                        <option value="{{ $data->id }}">
                          {{ $data->nama_tag }}</option>
                          @endforeach
                      </select>
                    </div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('artikel.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
    <div class="col-sm-12">
      <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>