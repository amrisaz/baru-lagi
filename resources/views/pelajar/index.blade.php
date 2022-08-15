@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/pelajar/create">tambah data</a>
        <table class="table table-striped">
            <thead>
                <tr>
            
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Prodi</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Action</td>
                </tr>
            </thead>
                @foreach($pelajar as $p)
                <tr>
                
                    <td>{{$p->nik}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->prodi}}</td>
                    <td>{{$p->jenis_kelamin}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/pelajar/{{$p->id}}/edit">Edit</a>
                            <form action="/pelajar/{{$p->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Hapus">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>

    </div>
@endsection



