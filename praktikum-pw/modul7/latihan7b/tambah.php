<?php 

require '../php/functions.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST, $_FILES) > 0) {
		echo "<script>
				alert('Data Berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data Gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="POST">
		<label for="nama">Nama :</label><br>
		<input type="text" name="nama" id="nama"><br><br>

		<label for="penghasilan">Penghasilan :</label><br>
		<input type="text" name="penghasilan" id="penghasilan"><br><br>

		<label for="laba">Laba :</label><br>
		<input type="text" name="laba" id="laba"><br><br>

		<label for="asset">Asset :</label><br>
		<input type="text" name="asset" id="asset"><br><br>

		<label for="karyawan">Karyawan :</label><br>
		<input type="text" name="karyawan" id="karyawan"><br><br>

		<label for="kantor">Kantor Pusat :</label><br>
		<input type="text" name="kantor" id="kantor"><br><br>

		<label for="ceo">CEO :</label><br>
		<input type="text" name="ceo" id="ceo"><br><br>

		<label for="gambar">Gambar :</label><br>
		<input type="text" name="gambar" id="gambar"><br><br>

		<button type="submit" name="tambah">Tambah</button>
		<button><a href="index.php">Kembali</button></a>
		
	</form>

</body>
</html>