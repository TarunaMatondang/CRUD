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
 				<h3>TAMBAH SUPLIER</h3>
 				<div class="tiga">
 					<form action="" method="POST">
 						<h4>Nama Suplier</h4>
 						<input type="text" name="nama" placeholder="Nama Suplier" class="kontrol" required> 
 						<input type="submit" name="submit" value="Submit" class="button">
 					</form>
 					<?php 
 						if (isset($_POST['submit'])) {
 							$nama = ucwords($_POST['nama']);

 							$input = mysqli_query($conn, "INSERT into daftar_suplier VALUES('".$nama."')");
 							
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