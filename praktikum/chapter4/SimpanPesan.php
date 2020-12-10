<?php
$idPengirim = $_POST['id_Pengirim'];
$idPenerima = $_POST['id_Penerima'];
$judul = $_POST['judul'];
$TextPesan = $_POST['TextPesan'];
$date = date('Y-m-d H:i:s');
$conn = mysqli_connect("localhost","root","","iplmodul4");
$sql = "INSERT INTO pesan values('', '$idPengirim', '$idPenerima', '$judul', '$TextPesan', '$date')";
if($res = mysqli_query($conn,$sql)){
echo "Pesan berhasil ditambahkan";
}else{
echo "Pesan gagal ditambahkan";
}
?>
<br>
<button onclick="window.location.href = 'tampil.php'">Tampilkan Data</button>
