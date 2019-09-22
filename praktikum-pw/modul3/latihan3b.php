<!-- isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false -->

<!-- sedangkan 

empty(), digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.
yang pertama kita akan bahas mengenai isset:
sudah di jelaskan di atas bawha isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false. -->


<?php 
	// <!-- Isset : -->
	echo "Isset : <br>";
	var_dump(isset($var));   //hasilnya akan false karena blm didefiniskan

	$var=null;
	var_dump(isset($var));   //hasilnya akan false karena isinya NULL

	$var=0;
	var_dump(isset($var));   //hasilnya akan true

	$var="";
	var_dump(isset($var));   //hasilnya akan true

	$var="0";
	var_dump(isset($var));   //hasilnya akan true

	$var=array();
	var_dump(isset($var));   //hasilnya akan true

	$var=false;
	var_dump(isset($var));   //hasilnya akan true

	$var="this is a string";
	var_dump(isset($var));   //hasilnya akan true

	echo "<hr>";


	// EMPTY
	echo "Empty : <br>";
	var_dump(empty($var));   //hasilnya akan true krn variabel blm didefinisikan

	$var=null;
	var_dump(empty($var));   //hasilnya akan true krn isinya NULL

	$var=0;
	var_dump(empty($var));   //hasilnya akan true krn 0 dianggap kosong/empty

	$var="";
	var_dump(empty($var));   //hasilnya akan true krn "" krn isinya string kosong

	$var="0";
	var_dump(empty($var));   //hasilnya akan true krn "0" dianggap kosong/empty

	$var=array();
	var_dump(empty($var));   //hasilnya akan true krn berisi array kosong

	$var=false;
	var_dump(empty($var));   //hasilnya akan true krn bool false dianggap kosong/empty

	$var=" ";
	var_dump(empty($var));   //hasilnya akan false krn " " ada spasi didlm var tsb

	$var="this is a string";
	var_dump(empty($var));   //hasilnya akan false

	$var=2;
	var_dump(empty($var));   //hasilnya akan false krn 2 adalah angka yg valid

 ?>