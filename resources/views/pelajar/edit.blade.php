<h5>Edit</h5>

<form action="/pelajar/{{$pelajar->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nik" placeholder="nik" value="{{$pelajar->nik}}"><br>
    <input type="text" name="nama" placeholder="nama" value="{{$pelajar->nama}}"><br>
    <input type="text" name="prodi" placeholder="prodi" value="{{$pelajar->prodi}}"><br>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="">-Pilih Jenkel</option>
        <option value="L" @if($pelajar->jenis_kelamin == "L") selected @endif>Laki - Laki</option>
        <option value="P" @if($pelajar->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat">{{$pelajar->alamat}}</textarea><br>
    <input type="submit" name="submit" value="Update">
</form>