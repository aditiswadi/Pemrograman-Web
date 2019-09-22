<?php 

function koneksi() {
	$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
	mysqli_select_db($conn, "pw_163040019") or die("Database salah");

	return $conn;
}

function query($sql) {
	$conn = koneksi();
	$results = mysql_query($conn, "$sql");

	$rows = [];
	while ( $rows = mysqli_fetch_assoc(results) ) {
		$rows[] = $rows;
	};

	return $rows;
}

?>