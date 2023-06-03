<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$km = $_POST['kode_matakuliah'];
	$deskripsi = $_POST['deskripsi'];
	
	
	// buat query
	$sql = "INSERT INTO matakuliah (Nama, `Kode Matakuliah`, Deskripsi) VALUE ('$nama', '$km', '$deskripsi')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
