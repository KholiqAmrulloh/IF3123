<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "iplmodul4");
	echo "Data Berhasil Di Tampilkan";
	?>
	<legend><h3>Data Yang Di Tampilkan</h3></legend>
	<table align="center" border="3">
		<tr>
			<th>ID Pesan</th>
			<th>ID Pengirim</th>
			<th>ID Penerima</th>
			<th>Judul</th>
			<th>Pesan</th>
			<th>Tanggal</th>
			<th>Option</th>
		</tr>		
		<?php
			$sql = "SELECT * FROM pesan";
			$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row["id_Pesan"];?></td>
			<td><?php echo $row["id_Pengirim"];?></td>
			<td><?php echo $row["id_Penerima"];?></td>
			<td><?php echo $row["judul"];?></td>
			<td><?php echo $row["textPesan"];?></td>
			<td><?php echo $row["date"];?></td>
			<td><button><a href="Hapus.php?id_Pesan=<?php echo $row["id_Pesan"];?>">Hapus</button></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>