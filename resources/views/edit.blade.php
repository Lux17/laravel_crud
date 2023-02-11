<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Crud Laravel</title>
</head>
<body>
    <h2>PT. Daya Adicipta Mustika</h2>
    <h3> Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br>
    <br>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $p->id_pegawai }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama_pegawai }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan_pegawai }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->umur_pegawai }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat_pegawai}}</textarea> <br/>
		<input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>