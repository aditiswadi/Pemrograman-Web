<?php 

$GLOBALS['varGlobal'] = 18;

function testVar()
{
	$varLokal = 1;
	echo "<p> test variabel didalam function.<p>";
	echo "Variabel global : ".$GLOBALS['varGlobal'];
	echo "<br>";
	echo "Variabel lokal : $varLokal " ;
	echo "<br>";
}

testVar();

	echo "<p> test variabel didalam function.<p>";
	echo "Variabel global : $varGlobal ";
	echo "<br>";
	echo "Variabel lokal : $varLokal ";
	echo "<br>";

 ?>