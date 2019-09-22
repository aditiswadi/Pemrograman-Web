<?php $negaraAsean = [
		"Indonesia" =>"D.K.I Jakarta",
		"Singapura" =>"Singapura",
		"Malaysia" =>"Kuala lumpur",
		"Brunei" =>"Bandar Seri Begawan",
		"Thailand" =>"Bangkok",
		"Laos" => "Vientiene",
		"Filipina" => "Manila",
		"Myamar" => "Naypyidaw"];  
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php foreach ($negaraAsean as $negara => $ibuKota) : ?>
 		<li><?php echo "$negara : $ibuKota" ?></li>
 	<?php endforeach ?>

</body>
</html>
	