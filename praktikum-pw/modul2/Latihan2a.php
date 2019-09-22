<!DOCTYPE html>
<html>
<head>
	<title>modul 2 - latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>

		<?php 
			$baris = 15;
			$kolom = 5;
			
			for ($i=1; $i <= $baris; $i++) { 
				echo "<tr>";
				for ($j=1; $j <= $kolom; $j++ ) {
					echo "<td>";
					echo "Baris $i,";
					echo " Kolom $j";
				}
			}
		 ?>


	</table>

</body>
</html>