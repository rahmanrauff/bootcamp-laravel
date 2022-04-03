<html>
    <head>
        <style>
            table,
            th,
            td{
                border: 1px sloid black;
            }
        </style>
    </head>


    
<h2>Daftar Pelanggan</h2>
<form method="GET" action="/pelanggan">
<input type="text" name="src"> <br> 
<input type="submit" value="cari"> 

</form>
<div> <a href= "{{ route('pelanggan.create')}}">Tambah Pelanggan</a></div>
<table style="bordered ">
    <tr>
        <th>aksi</th>
        <th>Nama Pelanggan</th>
        <th>Kelamin</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        </tr>
    @foreach  ($daftarPelanggan as $pelanggan)
    <tr>
        <td><a href="/pelanggan/{{ $pelanggan->id }}">Lihat</a>
            <a href="/pelanggan/{{ $pelanggan["id"] }}/edit">Edit</a> 

            <form method="POST" action="/pelanggan/{{ $pelanggan["id"] }}" >
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
          
        
        <td>{{ $pelanggan["nama"]}}</td>
        <td>{{$pelanggan["kelamin"] == "L"? "laki-laki" : "wanita"}}</td>
        <td>{{$pelanggan["phone"]}}</td>
        <td>{{$pelanggan["alamat"]}}</td>
    </tr>
    @endforeach
   @if( count ($daftarPelanggan)==0)
   <tr>
       <td colspan="5">
           Tidak ada data Pelanggan
       </td>
   </tr>
   @endif
</table>
</html>