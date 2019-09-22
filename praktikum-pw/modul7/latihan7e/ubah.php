<?php 
require '../php/functions.php';
$id = $_GET["id"];
$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('Data Berhasil diubah!');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data Gagal diubah!');
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

	<h1>Ubah Data Perusahaan</h1>
	
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $perusahaan_teknologi['id']; ?>">

		<label for="nama">Nama :</label><br>
		<input type="text" name="nama" id="nama" value="<?php echo $perusahaan_teknologi['nama']; ?>"><br><br>

		<label for="penghasilan">Penghasilan :</label><br>
		<input type="text" name="penghasilan" id="penghasilan" value="<?php echo $perusahaan_teknologi['penghasilan']; ?>"><br><br>

		<label for="laba">Laba :</label><br>
		<input type="text" name="laba" id="laba" value="<?php echo $perusahaan_teknologi['laba']; ?>"><br><br>

		<label for="asset">Asset :</label><br>
		<input type="text" name="asset" id="asset" value="<?php echo $perusahaan_teknologi['asset']; ?>"><br><br>

		<label for="karyawan">Karyawan :</label><br>
		<input type="text" name="karyawan" id="karyawan" value="<?php echo $perusahaan_teknologi['karyawan']; ?>"><br><br>

		<label for="kantor">Kantor Pusat :</label><br>
		<input type="text" name="kantor" id="kantor" value="<?php echo $perusahaan_teknologi['kantor']; ?>"><br><br>

		<label for="ceo">CEO :</label><br>
		<input type="text" name="ceo" id="ceo" value="<?php echo $perusahaan_teknologi['ceo']; ?>"><br><br>

		<label for="gambar">Gambar :</label><br>
		<input type="text" name="gambar" id="gambar" value="<?php echo $perusahaan_teknologi['gambar']; ?>"><br><br>

		<button type="submit" name="ubah">ubah</button>
		<button><a href="index.php">Kembali</button></a>
	</form>
</body>
</html>