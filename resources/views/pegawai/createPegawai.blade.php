@extends('pegawai.stay')

@section('title')
    Create Pegawai
@endsection

@section('konten')
    <div class="row mt-5">
        <div class="offset-md-3 col-md-6">
            <h2 class="text-center mb-4">Daftar Pegawai</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif   
            <form method="post" action="{{route('pegawai.store')}}">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="" name="namaa">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="" name="emaill">
                </div>
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="text" class="form-control" id=""  name="umur">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" id="" name="alamat" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
@endsection