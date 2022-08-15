@extends('layouts.master')

@section('content')
    <div class="container">
        <h5>ts pelajar</h5>
        <form action="/pelajar/store" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nik</label>
                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" aria-describedby="emailHelp">
            </div>

            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">-Pilih Jenkel</option>
                <option value="L">-Laki - Laki</option>
                <option value="P">-Perempuan</option>
            </select><br>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10" placeholder="alamat"></textarea><br>
            </div>
            <input class="btn btn-success" type="submit" name="submit" value="Simpan">
        </form>
    </div>
@endsection


