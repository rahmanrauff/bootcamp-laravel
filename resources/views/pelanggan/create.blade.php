<h2>Tambah Pelanggan</h2>
<form method="POST" action="{{ route('pelanggan.store') }}">
    @csrf
    Nama <input type="text" name="nama"><br>
    Jenis Kelamin: <input type="radio"  id= "laki-laki"name="kelamin" value="L">
    <label for="laki-laki">Laki-laki</label>
    <input type="radio"  id= "perempuan"name="kelamin" value="P">
    <label for="perempuan">Perempuan</label> <br>
    Alamat <textarea name="alamat"></textarea> <br>
    No HP <input type="number" name="phone"><br>
    
    <input type="submit" value="submit">
</form>


</table> 