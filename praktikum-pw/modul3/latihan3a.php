<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3A</title>
	<style>
		.ganti-style {
			font-size: 28px;
			font-family: arial;
			color: #1A0547;
			font-style: italic;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<?php 
		$tulisan = "Hello World! Here I come!";
		$kelas = "ganti-style";

		function ganti_style($tulisan,$kelas) {
			return "<p class='$kelas'>$tulisan</p>";
		}
		echo ganti_style($tulisan,$kelas);

	 ?>

</body>
</html>