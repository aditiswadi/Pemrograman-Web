<?php 
$mhs = [
			["img" => "fahmi.png", 
			"nama" => "Fahmi Ramadhan", 
			"email" => "fahmi@mail.unpas.ac.id", 
			"jurusan" => "Teknik Informatika", 
			"universitas" => "Universitas Pasundan Bandung"],

			["img" =>"tanti.jpg", 
			"nama" => "Tanti Yuliawati", 
			"email" => "tanti@mail.unpas.ac.id", 
			"jurusan" => "Teknologi Pangan", 
			"universitas" => "Universitas Pasundan Bandung"],

			["img" => "faisal.jpg", 
			"nama" => "Muhammad Faisal", 
			"email" => "faisal@mail.unpas.ac.id", 
			"jurusan" => "Teknik Mesin", 
			"universitas" => "Universitas Pasundan Bandung"],

			["img" => "kemal.png", 
			"nama" => "Kemal Maulana", 
			"email" => "kemal@gmail.com", 
			"jurusan" => "Teknik Pertambangan",
			"universitas" => "Institut Teknologi Bandung"],

			["img" => "farhan.png", 
			"nama" => "Farhan Andrew", 
			"email" => "andrew@gmail.com", 
			"jurusan" => "Pendidikan Bahasa Inggris", 
			"universitas" => "Universitas Pendidikan Indonesia"],
		];


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
	<link rel="stylesheet" href="css/latihan2.css">
</head>
<body>
		<div class="header">
			<p>Daftar Mahasiswa</p>
		</div>

	<div class="container">
			<?php foreach ($mhs as $data): ?>
		<div class="content">
			<div class="gambar"><img src="img/<?= $data['img'] ?>"></div>
			<div class="desc">
				<p class="nama"><a href="profil.php?img=<?= $data['img'] ?>&nama=<?= $data['nama'] ?>&email=<?= $data['email'] ?>&jurusan=<?= $data['jurusan'] ?>&universitas=<?= $data['universitas'] ?>" ><?php echo $data['nama'] ?></a></p>
				<p><?= $data['email'] ?></p>
			</div>
			<div class="clear"></div>
		</div>
			<?php endforeach ?>
	</div>
</body>
</html>