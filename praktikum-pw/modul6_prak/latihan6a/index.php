<?php 
$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
mysqli_select_db($conn, "pw_163040019") or die("Database salah");


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
		<?php 
			$results = mysqli_query($conn, "SELECT * FROM mahasiswa");
			while ($row = mysqli_fetch_assoc($results)) {
		?>

		<div class="content">
			<div class="gambar">
				<img src="../latihan0/img/<?= $row['gambar'] ?>">
			</div>	
			<p class= "nama"><?= $row['nama'] ?></p>
			<p><?= $row['email'] ?></p>
			<p><?= $row['jurusan'] ?></p>
			<p><?= $row['universitas'] ?></p>
		</div>
		<?php } ?>
	</div>
</body>
</html>