<?php 
	
	$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>looping for php</title>
 </head>
 <body>
 	<?php 

 		foreach ($nama as $absen) { 
 			echo "<li>$absen</li>";
 		}

 	 ?>
 
 </body>
 </html>