@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                    <div class="container">
                       <center><label>Masukan Nama</label></center>
                        <input type="text" name="namasiswa" class="container" required>
                    </div>
                    <div class="container">
                    <br>
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>
                    <div>
                        <ul class="data-siswa">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection