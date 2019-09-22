<?php 

// $angka= 5;
// $pangkat = 5;



// 	function pangkat ($angka, $pangkat) {
// 		$hasil = pow($angka, $pangkat);
// 		return "$angka pangkat $pangkat $hasil";
// 	}
// 		echo pangkat($angka, $pangkat) ;

	$angka = 5;
	$pangkat = 5;

	function pangkat ($angka, $pangkat) {
		$hasil = 1;
		for ($i=0; $i < $pangkat; $i++) {
			$hasil *= $angka;
		} 
		return "$angka pangkat $pangkat = $hasil";
	}
	echo pangkat($angka, $pangkat);

 ?>