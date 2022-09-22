<?php 

$conn = mysqli_connect("localhost", "root", "", "school");

function tampil($table){
	global $conn;
	$query = "SELECT * FROM " . $table;
	$cek = mysqli_query($conn, $query);
	return $cek;
}

function tambah($data){
	global $conn;
	
	$nama = $data['nama'];
	$tgl_lahir = $data['tgl_lahir'];
	$alamat = $data['alamat'];

	$query_insert = "INSERT INTO data_siswa
	(nama, tgl_lahir, alamat) VALUES ('$nama', '$tgl_lahir', '$alamat')";

	mysqli_query($conn, $query_insert); //jalankan query

	return mysqli_affected_rows($conn); //mengembalikan nilai berupa angka ketika ada data yang berhasil di update (1 atau -1)
}

function hapus($id){
	global $conn;
	$query_delete = "DELETE FROM data_siswa WHERE id_siswa = $id";
	mysqli_query($conn, $query_delete);

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	$query_update = "UPDATE data_siswa SET
	nama = '$data[nama]', 
	tgl_lahir = '$data[tgl_lahir]',
	alamat = '$data[alamat]'
	WHERE id_siswa = $_GET[update];";

	mysqli_query($conn, $query_update);

	return mysqli_affected_rows($conn);
}

?>