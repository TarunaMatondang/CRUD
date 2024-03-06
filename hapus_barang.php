<?php 

	session_start();
	include 'konek.php';

	if (isset($_GET['nb1'])) {
		$hapus = mysqli_query($conn, "DELETE FROM daftar_barang WHERE nama_barang = '".$_GET['nb1']."' ");
		echo '<script> window.location="suplier_dan_barang.php"</script>';
	}
 ?>

