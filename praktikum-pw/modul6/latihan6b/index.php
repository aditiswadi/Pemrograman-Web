<?php 

require 'function.php';
$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi");

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Latihan6a 173040165</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

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
          <?php foreach ($perusahaan_teknologi as $company) : ?>
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
           <?php endforeach; ?>
        </tbody>
      </table>
    </div>   
  </div>  
</body>
</html>