<?php 
	session_start();
	include 'konek.php';

	$barang = mysqli_query($conn, "SELECT * FROM daftar_barang WHERE nama_barang = '".$_GET['nb']."'");
	if (mysqli_num_rows($barang)==0) {
		echo '<script>window.location="edit_barang.php" </script>';
		// code...
	}
	$b = mysqli_fetch_object ($barang);
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
 				<h3>EDIT BARANG</h3>
 				<div class="tiga">
					<form action="" method="POST" enctype="multipart/form-data">
						<h4>Pilih Nama Suplier</h4>
 					<select class="kontrol" name="suplier" required>
 						
	 						<?php 
	 							$suplier = mysqli_query($conn, "SELECT * FROM daftar_suplier");
	 							while($s=mysqli_fetch_array($suplier)){

	 						 ?>
	 						 <option value="<?php echo $s['nama_suplier'] ?>"<?php echo ($s['nama_suplier'] == $b->nama_suplier)?'selected':'';?>><?php echo $s['nama_suplier'] ?></option>
	 						<?php }?>
 						</select>

 						<h4>Edit Nama Barang</h4>
 						<input type="text" name="nama" placeholder="Nama barang" class="kontrol" value="<?php echo $b->nama_barang ?>" required>
 						<h4>Edit Deskripsi Barang</h4>
 						<textarea class="kontrol" name="deskripsi" placeholder="Deskripsi Barang"><?php echo $b-> desk_barang?></textarea><br>
 						<input type="submit" name="submit" value="Submit" class="button">
 					</form>
 					<?php 

 						if (isset($_POST['submit'])) {

 							$suplier = $_POST['suplier'];
 							$nama = $_POST['nama'];
 							$deskripsi = $_POST['deskripsi'];

 							$edit = mysqli_query($conn, "UPDATE daftar_barang SET 
						nama_suplier = '".$suplier."',
						nama_barang = '".$nama."',
						desk_barang = '".$deskripsi."'
						WHERE nama_barang = '".$b->nama_barang."'");
					 
 							if ($edit) {
 								echo '<script> window.location="suplier_dan_barang.php"</script>';
 								// code...
 							}else{
 								echo 'gagal'.mysqli_error($conn);
 							}
 							// code...
 						}

 					 ?>

	</div>
		
	</div>
	
</body>
</html>