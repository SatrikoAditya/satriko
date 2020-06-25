<!DOCTYPE html>
<html>
<head>
	<title>masukkan barang</title>
</style>
</head>
<body bgcolor="#d5f0f3">		
		<h1>Masukkan Barang</h1>
	
	<br/>
		<div id="kiri">
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Masukkan Barang</h3>
	<form action="input-aksi.php" method="post">		
		<table width="500"> 
			<tr>
    	<td>Nama Produk </td>
    	<td><input name="txtnama" type="text"></td>
  	</tr>
  	<tr>
    	<td>keterangan</td>
    	<td><input name="txtketerangan" type="text"></td>
  	</tr>
  	<tr>
	  	<td>Harga</td>
	  	<td><input name="txtharga" type="text"></td>
  	</tr>
	<tr>
	  	<td>jumlah</td>
	  	<td><input name="txtjumlah" type="text"></td>
  	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Tambah Barang"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>