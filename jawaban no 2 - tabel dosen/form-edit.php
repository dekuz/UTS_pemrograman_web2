<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-dosen.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dosen WHERE id=$id";
$query = mysqli_query($db, $sql);
$dosen = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit dosen | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Mahadosen</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $dosen['ID'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $dosen['Nama'] ?>" />
		</p>
		<p>
			<label for="nidn">NIDN: </label>
			<textarea name="nidn"><?php echo $dosen['NIDN'] ?></textarea>
		</p>	
		<p>
			<label for="jenjang_pendidikan">Jenjang Pendidikan: </label>
			<?php $jenjang_pendidikan = $dosen['Jenjang Pendidikan']; ?>
			<select name="jenjang_pendidikan">
				<option <?php echo ($jenjang_pendidikan == 'S2') ? "selected": "" ?>>S2</option>
				<option <?php echo ($jenjang_pendidikan == 'S3') ? "selected": "" ?>>S3</option>				
			</select>
		</p>		
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
