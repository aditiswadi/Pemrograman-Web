<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - latihan 1</title>
	<style>
		.kotak {
			border: 1px solid black;
			width: 40px;
			height: 40px;
			margin: 5px;
			text-align: center;
			float: left;
		}
		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #999;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>

<?php 
	for ($i=1; $i<=5; $i++) {
		for ($j=1; $j<=$i; $j++) {
			if ($i % 2 == 0) {
				echo "<div class= 'kotak genap'>$j</div>";
			} else {
				echo "<div class= 'kotak ganjil'>$j</div>";
			}
		}
		echo "<div class= 'clear'></div>";
	}
 ?>
	
</body>
</html>