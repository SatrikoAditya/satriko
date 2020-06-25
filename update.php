<?php 

include 'koneksi.php';
$nama = $_POST['txtnama'];
$keterangan = $_POST['txtketerangan'];
$harga = $_POST['txtharga'];
$jumlah = $_POST['txtjumlah'];


mysql_query("UPDATE produk SET nama_produk='$nama',keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'");

header("location:index.php?pesan=update");

?>