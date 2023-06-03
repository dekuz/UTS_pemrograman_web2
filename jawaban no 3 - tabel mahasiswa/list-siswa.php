<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
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
			<th>NIM</th>
			<th>Program Studi</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['ID']."</td>";
			echo "<td>".$siswa['Nama']."</td>";
			echo "<td>".$siswa['NIM']."</td>";
			echo "<td>".$siswa['Program Studi']."</td>";
			
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
