<?php
	$conn = mysqli_connect("localhost", "root", "", "iplmodul4");
	$id_Pesan = $_GET['id_Pesan'];
	$query = "DELETE FROM pesan WHERE id_Pesan = '$id_Pesan'";
	$sql = mysqli_query($conn, $query);
	header("location:tampil.php");
?>