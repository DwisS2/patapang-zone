<?php

include("config.php");

if( isset($_GET['a_id']) ){
	
	// ambil id dari query string
	$a_id = $_GET['a_id'];
	
	// buat query hapus
	$sql = "DELETE FROM admin WHERE a_id = $a_id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: table_admin.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
