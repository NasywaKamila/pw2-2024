<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Nasywa Kamila</td>
					<td>kamilanasywa65@gmail.com</td>
					<td>Bogor</td>
					<td>+62 8897-5969-618</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Rahma Amalia</td>
					<td>rahmaamalia@gmail.com</td>
					<td>Bogor</td>
					<td>+62 831-5053-0370</td>
				</tr>

				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$nama_lengkap = $_POST["nama_lengkap"];
						$email = $_POST["email"];
						$alamat = $_POST["alamat"];
						$telepon = $_POST["telepon"];

						if (empty($nama_lengkap) || empty($email) || empty($alamat) || empty($telepon)) {
							echo "<tr>
                            <td colspan='5'>Data tidak lengkap. Harap isi semua field.</td>
                            </tr>";
						} else {
							echo "<tr>
                            <td>3</td>
                            <td>$nama_lengkap</td>
                            <td>$email</td>
                            <td>$alamat</td>
                            <td>$telepon</td>
                            </tr>";
						}
					}
				?>

			</tbody>
		</table>
	</div>
</body>
</html>