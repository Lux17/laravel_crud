<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Crud Laravel</title>
</head>
<body>
    <h2>PT Daya Adicipta Mustika</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah">+ Tambah Pegawai</a>

    <br>
    <br>

    <table border="1">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{$p ->nama_pegawai}}</td>
        <td>{{$p ->jabatan_pegawai}}</td>
        <td>{{$p ->umur_pegawai}}</td>
        <td>{{$p ->alamat_pegawai}}</td>
        <td>
            <a href="/pegawai/edit/{{$p ->id_pegawai}}">Edit</a>
            <a href="/pegawai/hapus/{{$p ->id_pegawai}}">Hapus</a>
        </td>
    </tr>
    @endforeach
    </table>
</body> 
</html>