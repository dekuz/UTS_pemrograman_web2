<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Mahasiswa Baru</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Mahasiswa Baru</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="nim">NIM: </label>
			<input name="nim"></input>
		</p>		
		<p>
			<label for="">Program Studi: </label>
			<select name="program_studi">
				<option>Informatika</option>
				<option>Management</option>				
			</select>
		</p>		
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
