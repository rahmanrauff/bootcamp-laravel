
<h2>Edit Pelanggan</h2>
<form method="POST" action="/pelanggan/{{ $pelanggan->id }}">
    @csrf
    @method('PUT')
    Id= {{$pelanggan["id"]}} <br>

    id: {{ $pelanggan->id }} <br>
    Nama <input type="text" name="nama" value="{{ $pelanggan->nama }}"><br>
    No Telepon <input type="number" name="phone" value="{{ $pelanggan->phone }}"><br>
    Jenis Kelamin: <input type="radio"  id= "laki-laki"name="kelamin" value="L" {{$pelanggan->kelamin == "L"? "checked" : ""}}>
    <label for="laki-laki">Laki-laki</label>
    <input type="radio"  id= "perempuan"name="kelamin" value="P" {{$pelanggan->kelamin == "P"? "checked" : ""}}>
    <label for="perempuan">Perempuan</label> <br>
    ALamat <textarea name="alamat" >{{ $pelanggan->alamat }}</textarea>
    
    <input type="submit" name="submit">
</form>


</table> 