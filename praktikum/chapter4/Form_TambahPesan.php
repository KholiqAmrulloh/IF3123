<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pesan</title>
</head>
<h3 align="center">Input Data</h3>
<body>
	<form action="SimpanPesan.php" method="post" align="center">
		<!—diasumsikan idPengirim = id user login, didapatkan dari session dan
		idpesan auto_increment dan tanggal adalah tanggal saat ini sehingga tidak
		perlu input -->
		<input type="text" name="id_Pengirim" placeholder="Masukkan Id Pengirim"><br>
		<input type="text" name="id_Penerima" placeholder="Masukkan Id Penerima"><br>
		<input type="text" name="judul" placeholder="Judul"><br>
		<textarea name="TextPesan" placeholder="Masukkan Text Pesan"></textarea><br>
		<input type="submit" name="submit" value="Simpan">
	</form><br>
</body>
</html>