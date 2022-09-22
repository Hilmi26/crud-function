<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>

<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<a href="create.php" class="btn btn-success ">TAMBAH DATA</a>
			</div>
			<div class="col">
				<form class="d-flex" role="search" method="POST" action="">
					<input class="form-control me-2" type="text" name="search" placeholder="Masukkan Keyword Pencarian">
					<input class="btn btn-info text-light" type="submit" name="cari" value="CARI"></input>
					<a href="index.php" class="btn btn-warning text-light ms-2">Refresh</a>
				</form>
			</div>
		</div>

		<table class="table table-striped mt-3">
			<thead>
				<tr class="text-center">
					<th scope="col">NO</th>
					<th scope="col">NAMA</th>
					<th scope="col">TGL LAHIR</th>
					<th scope="col">ALAMAT</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//Pencarian
				if (isset($_POST['search'])) {
					$search = $_POST['search'];
					$get_data = mysqli_query($conn, "SELECT * FROM data_siswa WHERE data_siswa.nama LIKE '%$search%'
					OR data_siswa.alamat LIKE '%$search%'");
				} else {
					//Tampil Semua Data
					$get_data = tampil('data_siswa');
				}

				if (mysqli_num_rows($get_data)) {

					while ($data = mysqli_fetch_array($get_data)) {
				?>
						<tr class="text-center">
							<td><?php echo $data['id_siswa'] ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td><?php echo $data['tgl_lahir'] ?></td>
							<td><?php echo $data['alamat'] ?></td>
							<td>
								<a href="update.php?update=<?php echo $data['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
								<a href="delete.php?id_siswa=<?php echo $data['id_siswa'] ?>" onclick="return confirm ('Yakin akan menghapus data?')" class="btn btn-sm btn-danger">HAPUS
								</a>
							</td>
						</tr>
				<?php
					}
				} else {
					echo '<tr><td colspan="6" class="text-center">Tidak ada data yang ditemukan</td></tr>';
				}
				?>
			</tbody>
		</table>
	</div>

</body>

</html>