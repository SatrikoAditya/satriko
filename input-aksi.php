<?php 
include 'koneksi.php';
    $nama = $_POST['txtnama'];
	$keterangan = $_POST['txtketerangan'];
	$harga = $_POST['txtharga'];
	$jumlah = $_POST['txtjumlah'];

mysql_query("INSERT INTO produk (nama_produk,keterangan,harga,jumlah) VALUES('$nama','$keterangan','$harga','$jumlah')");

header("location:index.php?pesan=input");
?>