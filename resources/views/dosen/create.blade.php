<h5>ts Dosen</h5>


<form action="/dosen/store" method="POST">
    @csrf
    <input type="text" name="nik" placeholder="nik"><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="">-Pilih Jenkel</option>
        <option value="L">-Laki - Laki</option>
        <option value="P">-Perempuan</option>
    </select><br>
    <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat"></textarea><br>
    <input type="submit" name="submit" value="Simpan">
</form>