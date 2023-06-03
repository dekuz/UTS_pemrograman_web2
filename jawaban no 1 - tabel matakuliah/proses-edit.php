<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kode_matakuliah = $_POST['kode_matakuliah'];
	$deskripsi = $_POST['deskripsi'];
	
	// buat query update
	$sql = "UPDATE matakuliah SET nama='$nama', `Kode Matakuliah`='$kode_matakuliah', `Deskripsi`='$deskripsi' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-matakuliah.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
