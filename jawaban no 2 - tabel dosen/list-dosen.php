<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Dosen</title>
</head>

<body>
	<header>
		<h3>Dosen yang sudah terdaftar</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIDN</th>
			<th>Jenjang Pendidikan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM dosen";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['ID']."</td>";
			echo "<td>".$siswa['Nama']."</td>";
			echo "<td>".$siswa['NIDN']."</td>";
			echo "<td>".$siswa['Jenjang Pendidikan']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$siswa['ID']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['ID']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
