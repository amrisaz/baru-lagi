<a href="/karyawan/create">tambah data</a>

<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>NIK</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Departement</td>
            <td>Alamat</td>
            <td>Action</td>
        </tr>
    </thead>
        @foreach($karyawan as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nik}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->jenis_kelamin}}</td>
            <td>{{$p->departement}}</td>
            <td>{{$p->alamat}}</td>
            <td>
                <a href="/karyawan/{{$p->id}}/edit">Edit</a>
                <form action="/karyawan/{{$p->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Hapus">
                </form>
            </td>
        </tr>
        @endforeach
</table>