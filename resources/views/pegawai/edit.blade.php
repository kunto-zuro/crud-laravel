@extends('pegawai.stay')

@section('title')
Edit Pegawai
@endsection

@section('konten')
<div class="row mt-5">
    <div class="offset-md-3 col-md-6">
        <h2 class="text-center mb-4">Edit Pegawai</h2>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action=" {{ action('PegawaiController@update', $pegawai['id']) }} ">
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="" name="nama" value="{{ $pegawai->nama }}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" name="email" value="{{ $pegawai->email }}">
            </div>
            <div class="form-group">
                <label for="">Umur</label>
                <input type="text" class="form-control" id="" name="umur" value=" {{$pegawai->umur }}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea class="form-control" id="" name="alamat">{{$pegawai->alamat}}</textarea>
            </div>
            @method('PUT')  
            <button type="submit" class="btn btn-primary">edit</button>
        </form>
    </div>
</div>
@endsection