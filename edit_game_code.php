<?php

include("config.php");

	
	// ambil data dari formulir
	$g_id = $_POST['g_id'];
	$g_nama = $_POST['g_nama'];
	$g_kategori = $_POST['g_kategori'];
	$g_link = $_POST['g_link'];

	// $waktu = date("Y-m-d H:i:s");
	// $penulis = ("Admin");
	$g_deskripsi1 = $_POST['g_deskripsi1'];
	$g_deskripsi2 = $_POST['g_deskripsi2'];
	
	$g_gambar = $_FILES['g_gambar']['name'];
	$g_ukuran = $_FILES['g_gambar']['size'];
	$g_tipe = $_FILES['g_gambar']['type'];
	$tmp_file = $_FILES['g_gambar']['tmp_name'];
	
	
	$path = "images/".$g_gambar;

if($g_tipe == "image/jpeg" || $g_tipe == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
	if($g_ukuran <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
		// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
		// Proses upload
		if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
			// Jika gambar berhasil diupload, Lakukan :	
			// Proses simpan ke Database
				$query = "UPDATE game SET g_nama='$g_nama', g_kategori='$g_kategori', g_deskripsi1='$g_deskripsi1', g_deskripsi2='$g_deskripsi2', g_link = '$g_link', g_gambar='$g_gambar', g_ukuran='$g_ukuran', g_tipe='$g_tipe' WHERE g_id=$g_id";
	$sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: table_game.php"); // Redirectke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='add_game.php'>Kembali Ke Form</a>";
			}
		}else{
			// Jika gambar gagal diupload, Lakukan :
			echo "Maaf, Gambar gagal untuk diupload.";
			echo "<br><a href='add_game.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika ukuran file lebih dari 1MB, lakukan :
		echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
		echo "<br><a href='add_game.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
	echo "<br><a href='add_game.php'>Kembali Ke Form</a>";
}


?>
