<?php 
	$angka = 5;

	function faktorial ($angka) {
		$hasil = 1;
		for ($i=$angka; $i >= 1; $i--) {
			$hasil = $hasil*$i;
		} 
		return "Faktorial dari $angka = $hasil";
	}
	echo faktorial($angka);
 ?>