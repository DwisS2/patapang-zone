<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$judul = $_POST['judul'];
	$pesan = $_POST['pesan'];
	
	// buat query
	$sql = "INSERT INTO saran (nama, email, judul, pesan) VALUE ('$nama', '$email', '$judul', '$pesan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: table_game.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
