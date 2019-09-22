<?php 
	require '../php/functions.php';

	if (isset($_GET['cari'])) {
		$keyword = $_GET['s'];
		$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi WHERE
				nama LIKE '%$keyword%' OR
				penghasilan LIKE '%$keyword%' OR
				laba LIKE '%$keyword%' OR
				asset LIKE '%$keyword%' OR
				karyawan LIKE '%$keyword%' OR
				kantor LIKE '%$keyword%' OR
				ceo LIKE '%$keyword%'
			");
	} else {
		$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi");
	}	
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 7D</title>
 </head>
 <body>

 	<a href="tambah.php">Tambah Data Perusahaan</a><br><br>
	
	<form action="" method="get">
		<input type="text" name="s" id="s" class="form-control" placeholder="Search...">
		<button type="submit" name="cari" id="cari">Cari</button>
	</form>
	<br>

 	<table cellpadding="1" cellspacing="1" border="2">
 		<tr>
 			<th>No</th>
 			<th>Opsi</th>
 			<th>Nama Perusahaan</th>
 			<th>Penghasilan</th>
 			<th>Laba</th>
 			<th>Asset</th>
 			<th>Karyawan</th>
 			<th>kantor Pusat</th>
 			<th>CEO</th>
 			<th>Gambar</th>
 		</tr>

 		<?php if(empty($perusahaan_teknologi)): ?>
 			<tr>
 				<td colspan="7">
 					<h1 align="center">Data Tidak Ditemukan!</h1>
 				</td>
 			</tr>
 		<?php else: ?>

 		<?php $i = 1; ?>
 		<?php foreach($perusahaan_teknologi as $company): ?>
 			<tr>
 				<td><?= $i++; ?></td>
 				<td>
 					<a href="ubah.php?id=<?= $company['id']; ?>">Ubah</a>
 					<a href="hapus.php?id=<?php echo $company['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
 				</td>
 				<td><?php echo $company['nama']; ?></td>
 				<td><?php echo $company['penghasilan'] ?></td>
 				<td><?php echo $company['laba'] ?></td>
 				<td><?php echo $company['asset'] ?></td>
 				<td><?php echo $company['karyawan'] ?></td>
 				<td><?php echo $company['kantor'] ?></td>
 				<td><?php echo $company['ceo'] ?></td>
 				<td><img src="../assets/img/<?php echo $company['gambar'] ?>"></td>
 			</tr>
 		<?php endforeach; ?>
 	<?php endif; ?>
 	</table>
 </body>
 </html>