<?php 

require 'function.php';
$perusahaan_teknologi = query("SELECT * FROM perusahaan_teknologi");
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Latihan6c 173040165</title>
   <link rel="stylesheet" href="css/bootstrapmin.css">
</head>
<body>
  <!-- <div class="header">
    <p>Daftar Perusahaan Teknologi</p>
  </div>

  <div class="container">
    <?php foreach ($perusahaan_teknologi as $company) : ?>
      <div class="content">
        <div class="gambar">
          <img src="img/<?= $company['gambar']; ?>"></div>
        <div class="desc">
          <p class="nama">
            <a href="profil.php?id=<?= $company['id']; ?>"><?php echo $company['nama'] ?></a>
          </p>
        </div>
        <div class="clear"></div>
      </div>
    <?php endforeach; ?>
  </div> -->

  <style>
body {
  color: #566787;
  background: grey;
  font-family: 'Varela Round', sans-serif;
  font-size: 15px;
}
.container {
  width: 50%;
  margin-left: 300px;
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
  text-align: left;
  font-size: 40px;
  padding-right: 60px;
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
            <th>ID</th>
            <th>Nama Perusahaan</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($perusahaan_teknologi as $company) : ?>
          <tr>
            <td><?= $company['id']; ?></td>
            <td><a href="profil.php?id=<?= $company['id']; ?>"><?php echo $company['nama'] ?></a></td>
          </tr>
           <?php endforeach; ?>
        </tbody>
      </table>
    </div>   
  </div>  

</body>
</html>


