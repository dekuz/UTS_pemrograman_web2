<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Mahasiswa</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['ID'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['Nama'] ?>" />
		</p>
		<p>
			<label for="alamat">NIM: </label>
			<textarea name="alamat"><?php echo $siswa['NIM'] ?></textarea>
		</p>	
		<p>
			<label for="program_studi">Program Studi: </label>
			<?php $program_studi = $siswa['Program Studi']; ?>
			<select name="program_studi">
				<option <?php echo ($program_studi == 'Informatika') ? "selected": "" ?>>Informatika</option>
				<option <?php echo ($program_studi == 'Management') ? "selected": "" ?>>Management</option>				
			</select>
		</p>		
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
