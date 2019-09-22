<?php 

  $perusahaan = [
    [
      "nama" => "Apple Inc",
      "penghasilan" => "US$ 233,715 milyar",
      "laba" => "US$ 53,394 milyar",
      "asset" => "US$ 290,479 milyar",
      "karyawan" => "110.000 orang",
      "kantor" => "Cupertino, California, Amerika Serikat",
      "ceo" => "Timothy D.Cook",
      "img" => "apple.jpg"
    ],
    [
      "nama" => "Samsung Electronics",
      "penghasilan" => "US$ 177,44 milyar",
      "laba" => "US$ 16,532 milyar",
      "asset" => "US$ 206,585 milyar",
      "karyawan" => "319.000 orang",
      "kantor" => "Suwon, Korea Selatan",
      "ceo" => "Oh-Hyun Kwon",
      "img" => "samsung.jpg"
    ],
    [
      "nama" => "Amazon.com",
      "penghasilan" => "US$ 107,006 milyar",
      "laba" => "US$ 596 juta",
      "asset" => "US$ 65,444 milyar",
      "karyawan" => "230.800 orang",
      "kantor" => "Seattle, Washington, Amerika Serikat",
      "ceo" => "Jeffrey P. Bezos",
      "img" => "amazon.jpg"
    ],
    [
      "nama" => "Hon Hai Precision Industry (Foxconn)",
      "penghasilan" => "US$ 141,213 milyar",
      "laba" => "US$ 4,627 juta",
      "asset" => "US$ 70,28 milyar",
      "karyawan" => "1.060.000 orang",
      "kantor" => "New Taipei City, Taiwan",
      "ceo" => "Terry Gou",
      "img" => "foxconn.jpg"
    ],
    [
      "nama" => "HP (Hewlett Packard)",
      "penghasilan" => "US$ 103,335 milyar",
      "laba" => "US$ 4,554 milyar",
      "asset" => "US$ 106,882 milyar",
      "karyawan" => "287.000 orang",
      "kantor" => "Palo Alto, California, Amerika Serikat",
      "ceo" => "Dion J. Weisler",
      "img" => "hp.png"
    ],
    [
      "nama" => "Microsoft",
      "penghasilan" => "US$ 93,58 milyar",
      "laba" => "US$ 12,193 milyar",
      "asset" => "US$ 176,223 milyar",
      "karyawan" => "118.000 orang",
      "kantor" => "Redmond, Washington, Amerika Serikat",
      "ceo" => "Satya Nadella",
      "img" => "microsoft.jpg"
    ],
    [
      "nama" => "IBM",
      "penghasilan" => "US$ 82,461 milyar",
      "laba" => "US$ 13,19 milyar",
      "asset" => "US$ 110,495 milyar",
      "karyawan" => "411.798 orang",
      "kantor" => "Armonk, New York, Amerika Serikat",
      "ceo" => "Virginia M. Rometty",
      "img" => "ibm.jpg"
    ],
    [
      "nama" => "Alphabet Inc",
      "penghasilan" => "US$ 74,989 milyar",
      "laba" => "US$ 16,348 milyar",
      "asset" => "US$ 147,461 milyar",
      "karyawan" => "61.814 orang",
      "kantor" => "Mountain View, California, Amerika Serikat",
      "ceo" => "Larry Page",
      "img" => "alphabet.png"
    ],
    [
      "nama" => "Sony",
      "penghasilan" => "US$ 67,519 milyar",
      "laba" => "US$ 1,231 milyar",
      "asset" => "US$ 148,466 milyar",
      "karyawan" => "125.300 orang",
      "kantor" => "Tokyo, Jepang",
      "ceo" => "Kazuo Hirai",
      "img" => "sony.jpg"
    ],
    [
      "nama" => "Panasonic",
      "penghasilan" => "US$ 62,921 milyar",
      "laba" => "US$ 1,61 milyar",
      "asset" => "US$ 49,804 milyar",
      "karyawan" => "249.520 orang",
      "kantor" => "Osaka, Jepang",
      "ceo" => "Kazuhiro Tsuga",
      "img" => "panasonic.jpg"
    ]
  ]
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Latihan5b 173040165</title>
   <link rel="stylesheet" href="../assets/css/Latihan5b.css">
</head>
<body>
  <div class="header">
    <p>Daftar Perusahaan Teknologi</p>
  </div>

  <div class="container">
    <?php foreach ($perusahaan as $company): ?>
      <div class="content">
        <div class="gambar"><img src="../assets/img/<?= $company['img']; ?>"></div>
        <div class="desc">
          <p class="nama"><a href="Latihan5c.php?
            nama=<?= $company['nama']; ?>&
            penghasilan=<?= $company['penghasilan']; ?>&
            laba=<?= $company['laba']; ?>&
            asset=<?= $company['asset']; ?>&
            karyawan=<?= $company['karyawan']; ?>&
            kantor=<?= $company['kantor']; ?>&
            ceo=<?= $company['ceo']; ?>&
            img=<?= $company['img']; ?>"><?= $company["nama"] ?></a>
          </p>
          <p><?= $company['kantor']; ?></p>
        </div>
        <div class="clear"></div>
      </div>
    <?php endforeach ; ?>
  </div>
</body>
</html>


