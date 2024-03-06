<?php 
	session_start();
	include 'konek.php';

	$suplier = mysqli_query($conn, "SELECT * FROM daftar_suplier WHERE nama_suplier = '".$_GET['ns']."'");
	if (mysqli_num_rows($suplier)==0) {
		echo '<script>window.location="suplier_dan_barang.php" </script>';
		// code...
	}
	$s = mysqli_fetch_object ($suplier);
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
 				<h3>EDIT SUPLIER</h3>
 				<div class="tiga">

 					<form action="" method="POST">
 						<h4>Edit Nama Suplier</h4>
 						<input type="text" name="nama" placeholder="Nama Suplier" class="kontrol" value="<?php echo $s->nama_suplier ?>" required>
 						<input type="submit" name="submit" value="Submit" class="button">
 					</form>
 					<?php 

 						if (isset($_POST['submit'])) {
 							$nama = ucwords($_POST['nama']);

 							$edit = mysqli_query($conn, "UPDATE daftar_suplier SET nama_suplier = '".$nama."' WHERE nama_suplier = '".$s->nama_suplier."'");

 							if ($edit) {
 								echo '<script> window.location="suplier_dan_barang.php"</script>';
 								// code...
 							}else{
 								echo 'gagal'.mysqli_error($conn);
 							}
 							// code...
 						}

 					 ?>


</body>
</html>