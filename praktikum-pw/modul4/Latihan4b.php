<?php 

	$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 	 <h1>Daftar Negar ASEAN Awal :</h1>
 	<?php 
 		for ($i=0; $i < count($negara); $i++) { 
 			echo "<li>$negara[$i]</li>";
 		}
 	 ?>

 	 <?php $baru = array_push($negara, "Laos", "Filipina", "Myanmar"); 

 	 echo "<h1>Daftar negara ASEAN baru :</h1>";
 	 for ($i=0; $i < count($negara); $i++) { 
 			echo "<li>$negara[$i]</li>";
 		}
 	 ?>
 </body>
 </html>



