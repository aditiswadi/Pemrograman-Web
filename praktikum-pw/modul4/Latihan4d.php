<?php 
	$namaKota = [
		[
			"Nama Kota" => "Jakarta",
			"Makanan Khas" => "Kerak telor",
			"Harga" => "Rp. 25.000"
		],
		[
			"Nama Kota" => "Bandung",
			"Makanan Khas" => "Peuyeum",
			"Harga" => "Rp. 15.000"
		],
		[
			"Nama Kota" => "Brebes",
			"Makanan Khas" => "Telur Asin",
			"Harga" => "Rp. 46.000"
		],
		[
			"Nama Kota" => "Medan",
			"Makanan Khas" => "Bika Ambon",
			"Harga" => "Rp. 65.000"
		],
		[
			"Nama Kota" => "Papua",
			"Makanan Khas" => "Abon Gulung",
			"Harga" => "Rp. 135.000"
		],
		[
			"Nama Kota" => "Bali",
			"Makanan Khas" => "Pie Susu",
			"Harga" => "Rp. 50.000"
		],
		[
			"Nama Kota" => "Pontianak",
			"Makanan Khas" => "Kue Bingka",
			"Harga" => "Rp. 26.000"
		],[
			"Nama Kota" => "Manado",
			"Makanan Khas" => "Pisang Goroho",
			"Harga" => "Rp. 60.000"
		],[
			"Nama Kota" => "Solo",
			"Makanan Khas" => "Nasi Liwet",
			"Harga" => "Rp. 17.000"
		],[
			"Nama Kota" => "Bandung",
			"Makanan Khas" => "Surabi",
			"Harga" => "Rp. 10.000"
		]
	]
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" cellspacing="1" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama Kota</th>
			<th>Makanan Khas</th>
			<th>Harga</th>
		</tr>
	
		<?php $i = 1; ?>
		<?php foreach ($namaKota as $kota): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $kota["Nama Kota"]; ?></td>
				<td><?php echo $kota["Makanan Khas"]; ?></td>
				<td><?php echo $kota["Harga"]; ?></td>
			</tr>
		<?php endforeach; ?>

	</table>

</body>
</html>