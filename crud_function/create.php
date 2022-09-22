<?php
include 'config.php';

if (isset($_POST['submit'])) {

	if (tambah($_POST) > 0) {
		echo "<script>alert('Data telah tersimpan');
		document.location='index.php'</script>";
	} else {
		echo "<script>alert('Gagal');
		document.location='index.php'</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/bootstrap/custom/style.css">
</head>

<body>

	<!-- Form CRUD -->
	<div class="container mt-5">
		<form action="" method="post">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">BIODATA MAHASISWA</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nama</td>
						<td><input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" class="form-control" name="tgl_lahir"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></td>
					</tr>
				</tbody>
			</table>
			<div class="text-end">
				<a href="index.php" type="button" class="btn btn-danger">Kembali</a>
				<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</div>
		</form>
	</div>

</body>

</html>

<script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="asset/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>