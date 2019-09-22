<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profil Mahasiswa</title>
	<link rel="stylesheet" href="css/profil.css">
</head>
<body>
	<div class="header">
		<p>Profil Perusahaan Teknologi</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar"><img src="img/<?= $_GET['img']; ?>"></div>
		<div class="desc">
			<p class= "nama">
					Nama Perusahaan : <?= $_GET['nama']; ?><br>
					Penghasilan : <?= $_GET['penghasilan']; ?><br>
					Laba : <?= $_GET['laba']; ?><br>
					Jumlah Asset : <?= $_GET['asset']; ?><br>
					Jumlah Karyawana : <?= $_GET['karyawan']; ?><br>
					Kantor Pusat : <?= $_GET['kantor']; ?><br>
					CEO : <?= $_GET['ceo']; ?>
					
			</p>
			<p><a href="index.php">Kembali</a></p>
		</div>
	</div>
</div>

	
</body>
</html>