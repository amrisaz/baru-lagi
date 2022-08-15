<a href="/dosen/create">tambah data dosen</a>

<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>NIK</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Action</td>
        </tr>
    </thead>
        @foreach($dosen as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nik}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->jenis_kelamin}}</td>
            <td>{{$p->alamat}}</td>
            <td>
                <a href="/dosen/{{$p->id}}/edit">Edit</a>
                <form action="/dosen/{{$p->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Hapus">
                </form>
            </td>
        </tr>
        @endforeach
</table>