<?php 
	require '../helper/functions.php';

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
 	<title>Halaman Admin</title>
 	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 	<link rel="stylesheet" href="../assets/css/index-admin.css">
 </head>
 <body>
	<div class="container">
	        <div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-4">
							<h2>Perusahaan <b>Teknologi</b></h2>
						</div>
						<form class="form-inline my-2 my-lg-0">
      						<input class="form-control mr-sm-2" type="search" name="s" id="s" placeholder="Search">
      						<button class="btn btn-info my-2 my-sm-0" type="submit" name="cari" id="cari">Search</button>
    					</form>
						<div class="col-sm-4">
							<a href="logout.php" class="btn btn-danger">Logout</a>
							<a href="tambah.php" class="btn btn-success"><span>Tambah Data Perusahaan</span></a>
						</div>
	                </div>
	            </div>
	            <table class="table table-striped table-hover">
	                <thead>
	                    <tr>
	                        <th>#</th>
						     <th>Opsi</th>
						     <th>Nama</th>
						     <th>Penghasilan</th>
						     <th>Laba</th>
						     <th>Asset</th>
						     <th>Karyawan</th>
						     <th>Kantor</th>
						     <th>CEO</th>
						     <th>Gambar</th>
	                    </tr>
	                </thead>
	                <?php if(empty($perusahaan_teknologi)): ?>
			 			<tr>
			 				<td colspan="12">
			 					<h1 align="center">Data Tidak Ditemukan!</h1>
			 				</td>
			 			</tr>
		 			<?php else: ?>
		  
		  <?php foreach ($perusahaan_teknologi as $company): ?>
	                <tbody>
	                    <tr>
	                        <td><?= $company['id']; ?></td>
					      	<td>
					      		<a href="ubah.php?id=<?= $company['id']; ?>" style="color: blue;">Ubah</a>
				 				<a href="hapus.php?id=<?php echo $company['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" style="color: red;">Hapus</a>
					      	</td>
					      	<td><?= $company['nama']; ?></td>
					      	<td><?= $company['penghasilan']; ?></td>
					      	<td><?= $company['laba']; ?></td>
					      	<td><?= $company['asset']; ?></td>
					      	<td><?= $company['karyawan']; ?></td>
					      	<td><?= $company['kantor']; ?></td>
					      	<td><?= $company['ceo']; ?></td>
					      	<td><img src="../assets/img/<?= $company['gambar']; ?>"></td>
	                    </tr>
	                </tbody>
	      <?php endforeach; ?>
					<?php endif; ?>
	            </table>
	        </div>
	</div>
 </body>
 </html>