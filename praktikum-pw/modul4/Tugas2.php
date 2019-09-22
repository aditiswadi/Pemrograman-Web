<?php 

  $perusahaan = [
    [
      "Nama Perusahaan" => "Apple Inc",
      "Penghasilan (Revenue)" => "US$ 233,715 milyar",
      "Laba (Provit)" => "US$ 53,394 milyar",
      "Jumlah Asset" => "US$ 290,479 milyar",
      "Jumlah Karyawan" => "110.000 orang",
      "Kantor Pusat" => "Cupertino, California, Amerika Serikat",
      "CEO" => "Timothy D.Cook",
      "Gambar" => "apple.jpg"
    ],
    [
      "Nama Perusahaan" => "Samsung Electronics",
      "Penghasilan (Revenue)" => "US$ 177,44 milyar",
      "Laba (Provit)" => "US$ 16,532 milyar",
      "Jumlah Asset" => "US$ 206,585 milyar",
      "Jumlah Karyawan" => "319.000 orang",
      "Kantor Pusat" => "Suwon, Korea Selatan",
      "CEO" => "Oh-Hyun Kwon",
      "Gambar" => "samsung.jpg"
    ],
    [
      "Nama Perusahaan" => "Amazon.com",
      "Penghasilan (Revenue)" => "US$ 107,006 milyar",
      "Laba (Provit)" => "US$ 596 juta",
      "Jumlah Asset" => "US$ 65,444 milyar",
      "Jumlah Karyawan" => "230.800 orang",
      "Kantor Pusat" => "Seattle, Washington, Amerika Serikat",
      "CEO" => "jeffrey P. Bezos",
      "Gambar" => "amazon.jpg"
    ],
    [
      "Nama Perusahaan" => "Hon Hai Precision Industry (Foxconn)",
      "Penghasilan (Revenue)" => "US$ 141,213 milyar",
      "Laba (Provit)" => "US$ 4,627 juta",
      "Jumlah Asset" => "US$ 70,28 milyar",
      "Jumlah Karyawan" => "1.060.000 orang",
      "Kantor Pusat" => "New Taipei City, Taiwan",
      "CEO" => "Terry Gou",
      "Gambar" => "foxconn.jpg"
    ],
    [
      "Nama Perusahaan" => "HP (Hewlett Packard)",
      "Penghasilan (Revenue)" => "US$ 103,335 milyar",
      "Laba (Provit)" => "US$ 4,554 milyar",
      "Jumlah Asset" => "US$ 106,882 milyar",
      "Jumlah Karyawan" => "287.000 orang",
      "Kantor Pusat" => "Palo Alto, California, Amerika Serikat",
      "CEO" => "Dion J. Weisler",
      "Gambar" => "hp.png"
    ],
    [
      "Nama Perusahaan" => "Microsoft",
      "Penghasilan (Revenue)" => "US$ 93,58 milyar",
      "Laba (Provit)" => "US$ 12,193 milyar",
      "Jumlah Asset" => "US$ 176,223 milyar",
      "Jumlah Karyawan" => "118.000 orang",
      "Kantor Pusat" => "Redmond, Washington, Amerika Serikat",
      "CEO" => "Satya Nadella",
      "Gambar" => "microsoft.jpg"
    ],
    [
      "Nama Perusahaan" => "IBM",
      "Penghasilan (Revenue)" => "US$ 82,461 milyar",
      "Laba (Provit)" => "US$ 13,19 milyar",
      "Jumlah Asset" => "US$ 110,495 milyar",
      "Jumlah Karyawan" => "411.798 orang",
      "Kantor Pusat" => "Armonk, New York, Amerika Serikat",
      "CEO" => "Virginia M. Rometty",
      "Gambar" => "ibm.jpg"
    ],
    [
      "Nama Perusahaan" => "Alphabet Inc",
      "Penghasilan (Revenue)" => "US$ 74,989 milyar",
      "Laba (Provit)" => "US$ 16,348 milyar",
      "Jumlah Asset" => "US$ 147,461 milyar",
      "Jumlah Karyawan" => "61.814 orang",
      "Kantor Pusat" => "Mountain View, California, Amerika Serikat",
      "CEO" => "Larry Page",
      "Gambar" => "alphabet.png"
    ],
    [
      "Nama Perusahaan" => "Sony",
      "Penghasilan (Revenue)" => "US$ 67,519 milyar",
      "Laba (Provit)" => "US$ 1,231 milyar",
      "Jumlah Asset" => "US$ 148,466 milyar",
      "Jumlah Karyawan" => "125.300 orang",
      "Kantor Pusat" => "Tokyo, Jepang",
      "CEO" => "Kazuo Hirai",
      "Gambar" => "sony.jpg"
    ],
    [
      "Nama Perusahaan" => "Panasonic",
      "Penghasilan (Revenue)" => "US$ 62,921 milyar",
      "Laba (Provit)" => "US$ 1,61 milyar",
      "Jumlah Asset" => "US$ 49,804 milyar",
      "Jumlah Karyawan" => "249.520 orang",
      "Kantor Pusat" => "Osaka, Jepang",
      "CEO" => "Kazuhiro Tsuga",
      "Gambar" => "panasonic.jpg"
    ]
  ]
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  
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

	<title>Tugas2 173040165</title>
</head>
<body>
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
            <th>No.</th>
            <th>Nama Perusahaan</th>
            <th>Profil</th>
            <th>Penghasilan (Revenue)</th>
            <th>Laba (Provit)</th>
            <th>Jumlah Asset</th>
            <th>Jumlah Karyawan</th>
            <th>Kantor Pusat</th>
            <th>CEO</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($perusahaan as $company): ?>
          <tr>
             <td><?php echo $i++; echo "."; ?></td>
              <td><?php echo $company["Nama Perusahaan"]; ?></td>
              <td><img src="../assets/img/<?php echo $company["Gambar"]; ?>" class="img-circle"></td>
              <td><?php echo $company["Penghasilan (Revenue)"]; ?></td>
              <td><?php echo $company["Laba (Provit)"]; ?></td>
              <td><?php echo $company["Jumlah Asset"]; ?></td>
              <td><?php echo $company["Jumlah Karyawan"]; ?></td>
              <td><?php echo $company["Kantor Pusat"]; ?></td>
              <td><?php echo $company["CEO"]; ?></td>
          </tr>      
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>   
  </div>
</body>
</html>


