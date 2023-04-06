<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai Akhir</title>
    <style>
		body {
			font-family: Arial, sans-serif;
		}
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
		}
		h1, h2 {
			text-align: center;
		}
		table {
			margin-bottom: 20px;
			border-collapse: collapse;
			background-color: #FAEBD7;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #000;
		}
		th {
			background-color: #eee;
		}
		.nilai-akhir {
			font-weight: bold;
			font-size: 24px;
			text-align: center;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<form method="POST">
	<center>
	<h1>Nilai Akhir</h1>
	<table border="1">
			<tr>
				<td><label for="nim">NIM:</label></td>
				<td><input type="text" name="nim" id="nim" required><br></td>
			</tr>
			<tr>
				<td><label for="nama">Nama:</label></td>
				<td><input type="text" name="nama" id="nama" required><br></td>
			</tr>
			<tr>
				<td><label for="jurusan">Jurusan:</label></td>
				<td><input type="text" name="jurusan" id="jurusan" required><br></td>
			</tr>
			<tr>
				<td><label for="nilai-harian">Nilai Harian:</label></td>
				<td><input type="number" name="nilai-harian" id="nilai-harian" required><br></td>
			</tr>
			<tr>
				<td><label for="nilai-tugas">Nilai Tugas:</label></td>
				<td><input type="number" name="nilai-tugas" id="nilai-tugas" required><br></td>
			</tr>
			<tr>
				<td><label for="nilai-uts">Nilai UTS:</label></td>
				<td><input type="number" name="nilai-uts" id="nilai-uts" required><br></td>
			</tr>
			<tr>
				<td><label for="nilai-uas">Nilai UAS:</label></td>
				<td><input type="number" name="nilai-uas" id="nilai-uas" required><br></td>
			</tr>
	</table>
	<input type="submit" name="submit" value="Hitung">
	</center>
	</form>
	<?php
	if(isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$nilai_harian = $_POST['nilai-harian'];
		$nilai_tugas = $_POST['nilai-tugas'];
		$nilai_uts = $_POST['nilai-uts'];
		$nilai_uas = $_POST['nilai-uas'];
		$nilai_akhir = ($nilai_harian * 0.2) + ($nilai_tugas * 0.1) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);
		echo "<h2>Nilai Akhir $nama ($nim) - $jurusan</h2>";
		echo "<div class='nilai-akhir'>Nilai Akhir: $nilai_akhir</div>";
	}
	?>
</body>
</html>