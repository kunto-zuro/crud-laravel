@extends('pegawai.stay')

@section('title')
Data Pegawai
@endsection

@section('konten')
<div class="row">
    <div class="offset-md-2 col-md-8 mt-5">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" colspan="2" class="text-center">Action Button</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->umur }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td><a href="{{ action('PegawaiController@edit', $p['id']) }}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action=" {{ route('pegawai.destroy', $p->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection