<!DOCTYPE html>
<html>
<head>
	<title>Edit Produk</title>
</head>
<body bgcolor="#d5f0f3">	
		<h1>Edit Produk</h1>
	
	<br/>
	
	<a href="index.php">Lihat Produk</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM produk WHERE id='$id'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama Produk</td>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<td><input type="text" name="txtnama" value="<?php echo $data['nama_produk'] ?>"></td>					
			</tr>	
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="txtketerangan" value="<?php echo $data['keterangan'] ?>"></td>					
			</tr>	
			<tr>
				<td>harga</td>
				<td><input type="text" name="txtharga" value="<?php echo $data['harga'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="txtjumlah" value="<?php echo $data['jumlah'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Edit"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>