<!DOCTYPE html>
<html>
<head>
	<title>latihan1c</title>
	<style>
		.kotak1 {
			width: 300px;
			height: 300px;
			margin: 10px;
			border: 2px solid blue;
			
		}
		.kotak2 {
			width: 80px;
			height: 80px;
			border: 2px solid black;
			text-align: center;
			float: left;
			margin: 8px;	
		}
		.clear {
			clear: both;
		}
		
	</style>
</head>
<body>

	<div></div>

	<?php 
		$a = "A";
		$b = "B";
		$c = "C";
	?>
		<div class="kotak1">
			<div class="kotak2"><?php echo $a ?></div>
			<div class="clear"></div>

			<div class="kotak2"><?php echo $a ?></div>
			<div class="kotak2"><?php echo $b ?></div>
			<div class="clear"></div>

			<div class="kotak2"><?php echo $a ?></div>
			<div class="kotak2"><?php echo $b ?></div>
			<div class="kotak2"><?php echo $c ?></div>
			<div class="clear"></div>
		</div>
</body>
</html>