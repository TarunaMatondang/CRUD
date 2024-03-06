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
 				<h3>TAMBAH BARANG</h3>
 				<div class="tiga">
 					<form action="" method="POST" enctype="multipart/form-data">
 						<select class="kontrol" name="suplier" required>
 						<option value="">--PILIH SUPLIER--</option>
	 						<?php 
	 							$suplier = mysqli_query($conn, "SELECT * FROM daftar_suplier ");
	 							while($s=mysqli_fetch_array($suplier)){

	 						 ?>
	 						 <option value="<?php echo $s['nama_suplier'] ?>"><?php echo $s['nama_suplier'] ?></option>
	 						<?php }?>
 						</select>

 						<input type="text" name="nama" placeholder="Nama Barang" class="kontrol" required>

 						<textarea class="kontrol" type="text" name="deskripsi" placeholder="Deskripsi Barang" required></textarea>

 						<input type="submit" name="submit" value="Submit" class="button">
 					</form>
 					<?php 
 						if (isset($_POST['submit'])) {
 							$suplier = $_POST['suplier'];
 							$nama = $_POST['nama'];
 							$deskripsi = $_POST['deskripsi'];

 							
							$input = mysqli_query($conn, "INSERT into daftar_barang VALUES (
								'".$suplier."',
								'".$nama."',					
								'".$deskripsi."')

							");
 							
 								if($input){
									
									echo '<script>window.location="suplier_dan_barang.php"</script>';

								}else{
									echo 'gagal'.mysqli_error($conn);
						}	
 						}
 					
 					 ?>
 				</div>
 			</div>

 		</div>


 </body>
 </html>