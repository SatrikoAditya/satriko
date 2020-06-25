<!DOCTYPE html>
<html>
<head>
	<title>Satriko Aditya</title>
</head>
<body bgcolor="#d5f0f3">		
		<h1>Daftar Produk</h1>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	<br><button onClick="window.print();">Print</button>

	<h1 align="center">Daftar Barang</h1>
	<table align="center" border="1" class="table">
		<tr>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM produk")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['nama_produk']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>