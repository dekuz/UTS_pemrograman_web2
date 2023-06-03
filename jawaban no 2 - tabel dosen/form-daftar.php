<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Dosen</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Dosen</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="nidn">NIDN: </label>
			<input name="nidn"></input>
		</p>		
		<p>
			<label for="jenjang_pendidikan">Jenjang Pendidikan: </label>
			<select name="jenjang_pendidikan">
				<option>S2</option>
				<option>S3</option>				
			</select>
		</p>		
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
