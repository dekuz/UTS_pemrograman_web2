<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Dosen</title>
</head>

<body>
	<header>
		<h1>Tugas Coding</h1>
		<h3>Pendaftaran Dosen</h3>
		
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-dosen.php">List Dosen</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran mahasiswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
