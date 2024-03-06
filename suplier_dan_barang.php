<?php 
	session_start();
	include 'konek.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DAFTAR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="satu">
	<div class="dua">
		<h3>DAFTAR SUPLIER</h3>
		<div class="tiga">
			<a href="tambah_suplier.php">Tambah Suplier </a>	
			<table border="1s" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="5px">No</th>
							<th width="300px">SUPLIER</th>
							<th width="150px">KET</th>	
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$suplier = mysqli_query ($conn, "SELECT * FROM daftar_suplier");
							if (mysqli_num_rows($suplier)) {

								while ($s = mysqli_fetch_array($suplier)) {
								
						?>	
						<tr>
							<td> <?php echo $no++ ?></td>
							<td> <?php echo $s['nama_suplier']?></td>
							<td>
								<a href="edit_suplier.php?ns=<?php echo $s['nama_suplier']?>">Edit</a>
								<a href="hapus_suplier.php?ns1=<?php echo $s['nama_suplier']?>" onclick ="">Hapus</a>
							</td>
						</tr>

						<?php }} else{ ?>

						<tr>
							<td colspan="3">Tidak ada data</td>
						</tr>
						<?php } ?>
					 
					</tbody>

			 </table>
		</div>
	</div>
	
</div>


<div class="satu">
	<div class="dua">
		<h3>DAFTAR BARANG</h3>
		<div class="tiga">
			<a href="tambah_barang.php">Tambah Barang </a>	
			<table border="1s" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="50px">No</th>
							<th width="200px">NAMA SUPLIER</th>
							<th width="200px">NAMA BARANG </th>
							<th width="300px">DESKRIPSI BARANG</th>
							<th width="150px">KET</th>	
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$barang = mysqli_query ($conn, "SELECT * FROM daftar_barang");
							if (mysqli_num_rows($barang)) {

								while ($b = mysqli_fetch_array($barang)) {
								
						?>	
						<tr>
							<td> <?php echo $no++ ?></td>
							<td> <?php echo $b['nama_suplier']?></td>
							<td> <?php echo $b['nama_barang']?></td>
							<td> <?php echo $b['desk_barang']?></td>
							<td>
								<a href="edit_barang.php?nb=<?php echo $b ['nama_barang']?>">Edit</a>
								<a href="hapus_barang.php?nb1=<?php echo $b['nama_barang']?>" onclick ="">Hapus</a>
							</td>
						</tr>

						<?php }} else{ ?>

						<tr>
							<td colspan="5">Tidak ada data</td>
						</tr>
						<?php } ?>
					 
					</tbody>

			 </table>
		</div>
	</div>
	
</div>

</body>
</html>