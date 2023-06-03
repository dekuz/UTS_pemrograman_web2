<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Matakuliah</title>
</head>

<body>
	<header>
		<h3>Matakuliah</h3>
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
			<th>Kode Matakuliah</th>
			<th>Deskripsi</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM matakuliah";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['ID']."</td>";
			echo "<td>".$siswa['Nama']."</td>";
			echo "<td>".$siswa['Kode Matakuliah']."</td>";
			echo "<td>".$siswa['Deskripsi']."</td>";
			
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
