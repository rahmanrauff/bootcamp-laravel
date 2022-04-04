<h2>Tambah Pelanggan</h2>
<form method="POST" action="{{ route('pelanggan.store') }}">
    @csrf
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    Nama <input type="text" name="nama"><br>
    Jenis Kelamin: <input type="radio"  id= "laki-laki"name="kelamin" value="L">
    <label for="laki-laki">Laki-laki</label>
    <input type="radio"  id= "perempuan"name="kelamin" value="P">
    <label for="perempuan">Perempuan</label> <br>
    @error('kelamin')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    provinsi : <select name="province_id" >
        @foreach ($provinces as $province)

        <option value="{{$province->id}}">{{$province->province_name}}</option>
    
    @endforeach
    </select>
    <br>
    Alamat <textarea name="alamat"></textarea> <br>
    No HP <input type="number" name="phone"><br>
    
    <input type="submit" value="submit">
</form>


</table> 