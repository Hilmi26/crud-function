<?php 
include 'config.php';

$id = $_GET["id_siswa"]; //mengambil data ud_siswa dari url

	if (hapus($id) > 0) {
		echo "<script>alert('Data berhasil dihapus');
		document.location='index.php'</script>";
	} else {
		echo "<script>alert('Gagal');
		document.location='index.php'</script>";
	}

?>