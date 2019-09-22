<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<label for="angka">Masukan Angka :</label>
				<input type="text" name="angka">
				<button type="submit" name="submit">Tampilkan!</button>
	</form>
	<br>

<?php 
$angka = $_POST['angka'];

for ($i=$angka; $i>=1; $i--) {
	for ($j=1; $j<=$i; $j++) {
		echo $j." ";
	}
	echo "<br>";
}
?> 

</body>
</html>