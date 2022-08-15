<h5>Edit</h5>

<form action="/dosen/{{$dosen->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nik" placeholder="nik" value="{{$dosen->nik}}"><br>
    <input type="text" name="nama" placeholder="nama" value="{{$dosen->nama}}"><br>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="">-Pilih Jenkel</option>
        <option value="L" @if($dosen->jenis_kelamin == "L") selected @endif>Laki - Laki</option>
        <option value="P" @if($dosen->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat">{{$dosen->alamat}}</textarea><br>
    <input type="submit" name="submit" value="Update">
</form>