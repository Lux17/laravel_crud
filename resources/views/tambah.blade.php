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
    <h3>Tambah Data</h3>
    <br>

    <form action="/pegawai/simpan" method="POST">
        <!-- {{csrf_field()}} -->
        @csrf
        @method('POST')
        Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
    </form>
</body>
</html>