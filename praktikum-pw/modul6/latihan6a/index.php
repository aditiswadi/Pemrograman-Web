<?php 

$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
mysqli_select_db($conn, "pw_173040165") or die("Database salah!")
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
           <?php
                $results = mysqli_query($conn, "SELECT * FROM perusahaan_teknologi");
                while ($row = mysqli_fetch_assoc($results)) {
            ?>
          <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['penghasilan']; ?></td>
            <td><?= $row['laba']; ?></td>
            <td><?= $row['asset']; ?></td>
            <td><?= $row['karyawan']; ?></td>
            <td><?= $row['kantor']; ?></td>
            <td><?= $row['ceo']; ?></td>
            <td><img src="img/<?= $row['gambar']; ?>"></td>
          </tr>  
        </tbody>
      </table>
      <?php } ?>
    </div>   
  </div>  
</body>
</html>