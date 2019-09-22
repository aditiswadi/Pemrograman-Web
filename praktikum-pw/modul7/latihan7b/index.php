<?php 
	require '../php/functions.php';
	$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi");
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<a href="tambah.php">Tambah data Perusahaan</a>
 	<table cellpadding="1" cellspacing="1" border="2">
 		<tr>
 			<th>#</th>
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

 		<?php $i = 1; ?>
 		<?php foreach($perusahaan_teknologi as $company): ?>
 			<tr>
 				<td><?php echo $i++ ?></td>
 				<td>
 					<a href="">Ubah</a>
 					<a href="">Hapus</a>
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
 	</table>
 
 </body>
 </html>