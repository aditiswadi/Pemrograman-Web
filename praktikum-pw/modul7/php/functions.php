<?php 
function koneksi() {
	$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
	mysqli_select_db($conn, "pw_173040165") or die("Database salah!");

	return $conn;
}

function query($sql) {
	$conn = koneksi();
	$results = mysqli_query($conn, "$sql");

	$rows = [];
	while ( $row = mysqli_fetch_assoc($results) ) {
		$rows[] = $row;
	};
	return $rows;
}

function tambah($data) {
	$conn = koneksi();

	$nama = htmlspecialchars($data['nama']);
	$penghasilan = htmlspecialchars($data['penghasilan']);
	$laba = htmlspecialchars($data['laba']);
	$asset = htmlspecialchars($data['asset']);
	$karyawan = htmlspecialchars($data['karyawan']);
	$kantor = htmlspecialchars($data['kantor']);
	$ceo = htmlspecialchars($data['ceo']);
	$gambar = htmlspecialchars($data['gambar']);

	$querytambah = "INSERT INTO perusahaan_teknologi
						VALUES ('', '$nama', '$penghasilan', '$laba', '$asset', '$karyawan', '$kantor', '$ceo', '$gambar')";

	mysqli_query($conn, $querytambah);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM perusahaan_teknologi WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	$conn = koneksi();

	$id =$data['id'];
	$nama = htmlspecialchars($data['nama']);
	$penghasilan = htmlspecialchars($data['penghasilan']);
	$laba = htmlspecialchars($data['laba']);
	$asset = htmlspecialchars($data['asset']);
	$karyawan = htmlspecialchars($data['karyawan']);
	$kantor = htmlspecialchars($data['kantor']);
	$ceo = htmlspecialchars($data['ceo']);
	$gambar = htmlspecialchars($data['gambar']);

	$queryubah = "UPDATE perusahaan_teknologi
						SET
						nama = '$nama',
						penghasilan = '$penghasilan',
						laba = '$laba',
						asset = '$asset',
						karyawan = '$karyawan',
						karyawan = '$kantor',
						ceo = '$ceo',
						gambar = '$gambar'
					WHERE id = $id
						";

	mysqli_query($conn, $queryubah);

	return mysqli_affected_rows($conn);
}


 ?>