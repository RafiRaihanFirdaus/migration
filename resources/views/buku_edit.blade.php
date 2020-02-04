@extends('layout.template')
@section('title', "Mobil")
@section('container')
<div class="container">
<div class="row">
<div class="col-md-12">
<section class="main-section">
    <div class="content">
        <h1 align="center">Edit Data Buku</h1>
        <hr>


        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ url('/buku/update') }}" method="post">
            {{csrf_field() }}
            <input type="hidden" name="id" value="{{ $datas->id_mobil }}">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $datas->judul }}">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $datas->penerbit }}">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $datas->pengarang }}">
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control" id="foto" name="foto" value="{{ $datas->foto }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <a href="{{ url('mobil_admin') }}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        @endforeach
    </div>
</section>
</div>
</div>
</div>
@endsection
