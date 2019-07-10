@extends('layouts.app')
@section('content')
        <title>Tambah artikel</title>
                            <div class="container">
                                <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input type="text" name="judul" id="" class="form-control" aria-describedby="helpId">
                                    </div>
                                     <div class="form-group">
              <label for="">Konten</label>
              <textarea name="konten" id="ckeditor" cols="30" rows="5" class="form-control ckeditor"></textarea>
            </div>
                                   <div class="form-group">
              <label for="">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Nama kategori</label>
                <select name="kategori_id" class="form-control">
                  @foreach($kategori as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="">Tag</label>
                <select name="tag[]" class="form-control multiple" multiple>
                  @foreach($tag as $data)
                    <option value="{{ $data->id }}">
                      {{ $data->nama_tag }}</option>
                        @endforeach
                         </select>
                              </div>                                  
                                       <button type="submit" name="Simpan"class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('artikel.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection