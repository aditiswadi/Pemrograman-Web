<?php 

require 'function.php';
$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi");
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Latihan5b 173040165</title>
   <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <div class="header">
    <p>Daftar Perusahaan Teknologi</p>
  </div>

  <div class="container">
    <?php foreach ($perusahaan_teknologi as $company) : ?>
      <div class="content">
        <div class="gambar">
          <img src="img/<?= $company['gambar']; ?>"></div>
        <div class="desc">
          <p class="nama"><a><?= $company['nama']; ?></a></p>
          <p>Penghasilan : <?= $company['penghasilan']; ?></p>
          <p>Laba : <?= $company['laba']; ?></p>
          <p>Asset : <?= $company['asset']; ?></p>
          <p>Jumlah Karyawan : <?= $company['karyawan']; ?></p>
          <p>Kantor Pusat : <?= $company['kantor']; ?></p>
          <p>CEO : <?= $company['ceo']; ?></p>
        </div>
        <div class="clear"></div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>


