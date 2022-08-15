<h2>Edit</h2>


<form action="/karyawan/{{$karyawan->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nik" placeholder="nik" value="{{$karyawan->nik}}"><br>
    <input type="text" name="nama" placeholder="nama" value="{{$karyawan->nama}}"><br>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="">-Pilih Jenkel</option>
        <option value="L" @if($karyawan->jenis_kelamin == "L") selected @endif>Laki - Laki</option>
        <option value="P" @if($karyawan->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <input type="text" name="departement" placeholder="nama" value="{{$karyawan->departement}}"><br>
    <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat">{{$karyawan->alamat}}</textarea><br>
    <input type="submit" name="submit" value="Update">
</form>