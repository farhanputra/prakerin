@extends('layouts.app')


@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="container">Tambah Artikel</div>
                            </center>
            
                            <div class="container">
                                <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control 
                                        @error('judul') is-invalid " type="text" 
                                        name="judul" id="" required>
                                      
                                        <span class="invalid-feedback" role="alert">
                                           
                                        </span>
                                        
                                    </div>
                                    <div class="container">
                                        <label for="">Foto</label>
                                        <input class="form-control 
                                        @error('foto') is-invalid " type="file" 
                                        name="foto" id="" required>
                                       
                                        <span class="invalid-feedback" role="alert">
                                           
                                        </span>
                                        
                                    </div>
                                    <div class="container">
                                        <label for="">Tag</label>
                                        <select class="form-control
                                        @error('tag') is-invalid " name="tag[]" id="s2_demo3" multiple="multiple" required>
                                            @foreach ($tag as $data)
                                                <option value="{{$data->id}}">
                                                    {{ $data->nama_tag }}
                                                </option> 
                                            @endforeach
                                        </select>
                                       
                                        <span class="invalid-feedback" role="alert">
                                           
                                        </span>
                                        
                                    </div>
                                    <div class="container">
                                        <label for="">Kategori</label>
                                        <select class="form-control
                                        @error('kategori') is-invalid " name="id_kategori" id="" required>
                                            @foreach ($kategori as $data)
                                                <option value="{{$data->id}}">
                                                {{$data->nama_kategori}}</option> 
                                            @endforeach
                                        </select>
                                        
                                        <span class="invalid-feedback" role="alert">
                                           
                                        </span>
                                        
                                    </div>
                                    <div class="container">
                                            <label for="">Konten</label>
                                            <textarea class="form-control 
                                            @error('konten') is-invalid "
                                            name="konten" id="editor1" required>
                                            </textarea>
                                           
                                            <span class="invalid-feedback" role="alert">
                                               
                                            </span>
                                            
                                        </div>
                                    <div class="container">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection