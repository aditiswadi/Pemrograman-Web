<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil Mahasiswa</title>
	<link rel="stylesheet" href="css/latihan3.css">
</head>
<body>
	<div class="header">
		<p>Profil Mahasiswa</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar">
			<img src="img/<?= $_GET['img'] ?>">
		</div>
		<div class="desc">
			<p class= "nama"><?= $_GET['nama'] ?></p>
			<p><?= $_GET['email'] ?></p>
			<p><?= $_GET['jurusan'] ?>, <?= $_GET['universitas'] ?></p>
			<p><a href="index.php">Kembali</a></p>
		</div>
	</div>
</div>

	
</body>
</html>