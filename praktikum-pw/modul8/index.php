<?php 
require 'helper/functions.php';
$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi");

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
	<title>Tugas 3</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/index-user.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas 3</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <ul>
      <li class="nav navbar-nav navbar-right">
        <a class="nav-link" href="admin/login.php">Login as admin</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="header">
    <p>Daftar Perusahaan Teknologi</p>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="s" id="s" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="cari" id="cari">Search</button>
  </form>
  <div class="container">
    
    <?php if(empty($perusahaan_teknologi)): ?>
            <tr>
              <td colspan="12">
                <h1 align="center">Data Tidak Ditemukan!</h1>
              </td>
            </tr>
          <?php else: ?>
    <?php $i = 1; ?>
    <?php foreach ($perusahaan_teknologi as $company): ?>
      <div class="content">
        
        <div class="isi">
         <p class="nama">
           <a href="php/profil.php?id=<?= $company['id']; ?>&nama=<?= $company['nama']; ?>&penghasilan=<?= $company['penghasilan']; ?>&laba=<?= $company['laba']; ?>&asset=<?= $company['asset']; ?>&karyawan= <?= $company['karyawan']; ?>&kantor=<?= $company['kantor']; ?>&ceo=<?= $company['ceo']; ?>"><?= $company['id'] . '. ' . $company['nama']; ?></a>
         </p>
          <div class="gambar"><img src="assets/img/<?= $company['gambar']; ?>"></div>
        </div>
        <div class="clear"></div>
      </div>
    <?php endforeach ; ?>
  <?php endif; ?>
  </div>
</body>
</html>


