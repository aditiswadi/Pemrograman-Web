<?php 
	for( $i = 1; $i <= 20; $i++ ) {
	$k = 0;
		for( $j = 1; $j <= $i; $j++ )
			if( $i % $j == 0 ) {
				$k++;
			}
			if ( $k == 2 && $i % 2 == 0 ) {
				echo "Angka $i adalah bilangan genap sekaligus bilangan prima <br>";
			} elseif ( $k == 2 && $i % 2 == 1 ) {
				echo "Angka $i adalah bilangan ganjil sekaligus bilangan prima <br>";
			} elseif ( $i % 2 == 0 ) {
				echo "Angka $i adalah bilangan genap <br>";
			} elseif ( $i % 2 == 1 ) {
				echo "Angka $i adalah bilangan ganjil <br>";
			}
		}
?>