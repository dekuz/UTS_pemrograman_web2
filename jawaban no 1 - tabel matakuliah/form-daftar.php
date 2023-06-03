<!DOCTYPE html>
<html>
<head>
	<title>Matakuliah</title>
</head>

<body>
	<header>
		<h3>Matakuliah</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="" />
		</p>
		<p>
			<label for="">Kode Matakuliah: </label>
			<input name="kode_matakuliah"></input>
		</p>		
		<p>
			<label for="">Deskripsi: </label>
			<textarea name="deskripsi"></textarea>
		</p>		
		<p>
			<input type="submit" value="submit" name="submit" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
