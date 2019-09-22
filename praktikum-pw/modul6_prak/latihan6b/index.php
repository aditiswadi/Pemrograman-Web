<?php 
require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
	<link rel="stylesheet" href="../latihan0/css/latihan2.css">
</head>
<body>
	<div class="container">
		<?php foreach ($mahasiswa as $mhs) : ?>
		<div class="content">
			<div class="gambar">
				<img src="../latihan0/img/<?= $row['gambar'] ?>">
			</div>	
			<p class= "nama"><?= $row['nama'] ?></p>
			<p><?= $row['email'] ?></p>
			<p><?= $row['jurusan'] ?></p>
			<p><?= $row['universitas'] ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</body>
</html>