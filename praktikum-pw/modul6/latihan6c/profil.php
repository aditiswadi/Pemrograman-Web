<?php 

if (!isset($_GET['id'])) {
	header("Location: index.php");
	exit;
}

require 'function.php';
$id = $_GET['id'];

$company = query("SELECT * FROM perusahaan_teknologi where id = $id")[0];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profil Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<!-- <div class="header">
		<p>Profil Perusahaan Teknologi</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar"><img src="img/<?= $company['gambar']; ?>"></div>
		<div class="desc">
			<p class= "nama"><?= $company['nama']; ?></p>
			<p><?= $company['penghasilan']; ?></p>
			<p><?= $company['laba']; ?></p>
			<p><?= $company['asset']; ?></p>
			<p><?= $company['karyawan']; ?></p>
			<p><?= $company['kantor']; ?></p>
			<p><?= $company['ceo']; ?></p>
			<p><a href="index.php">Kembali</a></p>
		</div>
	</div>
</div> -->

<style>
body {
  color: #566787;
  background: grey;
  font-family: 'Varela Round', sans-serif;
  font-size: 15px;
}
.table-wrapper {
  background: #fff;
  padding: 20px 25px;
  margin: 30px 0;
  border-radius: 20px;
}
.table-title {        
  padding-bottom: 15px;
  background: #435d7d;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 20px 20px 0 0;
}
.table-title h2 {
  font-size: 40px;
}
img {
  width: 80px;
  height: 80px;
  margin-right: 20px;
  margin-left: 20px; 
}
th, td {
  text-align: center;
}
</style>

 <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2><b>Perusahaan Teknologi</b></h2>
          </div>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Id</th>
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
        <tbody>
          <tr>
            <td><?= $company['id']; ?></td>
            <td><?= $company['nama']; ?></td>
            <td><?= $company['penghasilan']; ?></td>
            <td><?= $company['laba']; ?></td>
            <td><?= $company['asset']; ?></td>
            <td><?= $company['karyawan']; ?></td>
            <td><?= $company['kantor']; ?></td>
            <td><?= $company['ceo']; ?></td>
            <td><img src="img/<?= $company['gambar']; ?>"></td>
          </tr>
        </tbody>
      </table>
    </div>   
  </div> 
</body>
</html>