<?php

include("config.php");

if( isset($_GET['g_id']) ){
	
	// ambil id dari query string
	$g_id = $_GET['g_id'];
	
	// buat query hapus
	$sql = "DELETE FROM game WHERE g_id = $g_id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: table_game.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
