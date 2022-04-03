<h2>Detail Pelanggan</h2>
<div> <a href= "{{ route('pelanggan.create')}}">Tambah Pelanggan</a></div>
<table style="bordered ">
    <tr>
        <th>Nama Pelanggan</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>



    <tr>
        
        <td>{{$pelanggan->nama}}</td>
        <td>{{$pelanggan->kelamin == "L" ? "Laki-Laki" : "wanita" }}</td>
        <td>{{$pelanggan->alamat}}</td>
      
    </tr>

</table>