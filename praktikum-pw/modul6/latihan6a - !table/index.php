<?php 

$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
mysqli_select_db($conn, "pw_173040165") or die("Database salah!")
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Latihan6a 173040165</title>
   <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <div class="header">
    <p>Daftar Perusahaan Teknologi</p>
  </div>

  <div class="container">
    <?php 
        $result = mysqli_query($conn, "SELECT * FROM perusahaan_teknologi");
        while ($row = mysqli_fetch_assoc($result)) {
     ?>

      <div class="content">
        <div class="gambar">
          <img src="img/<?= $row['gambar']; ?>"></div>
        <div class="desc">
          <p class="nama"><a><?= $row['nama']; ?></a></p>
          <p>Pengahasilan : <?= $row['penghasilan']; ?></p>
          <p>Laba : <?= $row['laba']; ?></p>
          <p>Asset : <?= $row['asset']; ?></p>
          <p>Jumlah Karyawan : <?= $row['karyawan']; ?></p>
          <p>Kantor Pusat : <?= $row['kantor']; ?></p>
          <p>CEO : <?= $row['ceo']; ?></p>
        </div>
        <div class="clear"></div>
      </div>
    <?php } ?>
  </div>
</body>
</html>


