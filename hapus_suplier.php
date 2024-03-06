<?php 

	session_start();
	include 'konek.php';

	if (isset($_GET['ns1'])) {
		$hapus = mysqli_query($conn, "DELETE FROM daftar_suplier WHERE nama_suplier = '".$_GET['ns1']."' ");
		echo '<script> window.location="suplier_dan_barang.php"</script>';
	}
 ?>

