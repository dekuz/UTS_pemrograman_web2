<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-matakuliah.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM matakuliah WHERE id=$id";
$query = mysqli_query($db, $sql);
$matakuliah = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Matakuliah</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Mahamatakuliah</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $matakuliah['ID'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="" value="<?php echo $matakuliah['Nama'] ?>" />
		</p>
		<p>
			<label for="">Kode Matakuliah: </label>
			<input name="kode_matakuliah"><?php echo $matakuliah['Kode Matakuliah'] ?></input>
		</p>
		<p>
			<label for="">Deskripsi: </label>
			<textarea name="deskripsi"><?php echo $matakuliah['Deskripsi'] ?></textarea>
		</p>	
			
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
