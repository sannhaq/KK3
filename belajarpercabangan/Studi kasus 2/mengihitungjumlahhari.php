<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menghitung hari</title>
</head>
<body>
	<center>
		<h1>Menghitung Jumlah Hari</h1>
		<form method="POST">
		<label >Bulan: </label>
		<select name="bulan">
			<option value="1">Januari</option>
			<option value="2">Februari</option>
			<option value="3">Maret</option>
			<option value="4">April</option>
			<option value="5">Mei</option>
			<option value="6">Juni</option>
			<option value="7">Juli</option>
			<option value="8">Agustus</option>
			<option value="9">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select>
		<label for="tahun">Tahun:</label>
		<input type="Number" name="tahun" id="tahun" value="<?php echo isset($_POST['tahun']) ? $_POST['tahun'] : ''; ?>">
		<input type="submit" name="submit" value="Hitung">
	</form>
	<?php
	if(isset($_POST['submit'])) {
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];
		$bulanArray = array(
			1 => 'Januari',
			2 => 'Februari',
			3 => 'Maret',
			4 => 'April',
			5 => 'Mei',
			6 => 'Juni',
			7 => 'Juli',
			8 => 'Agustus',
			9 => 'September',
			10 => 'Oktober',
			11 => 'November',
			12 => 'Desember'
		);
		$jumlahHari = 0;
		if($bulan == 2) {
			if(($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
				$jumlahHari = 29;
			} else {
				$jumlahHari = 28;
			}
		} elseif(in_array($bulan, array(4, 6, 9, 11))) {
			$jumlahHari = 30;
		} else {
			$jumlahHari = 31;
		}
		echo "<p>Jumlah hari pada bulan ".$bulanArray[$bulan]." tahun $tahun adalah $jumlahHari hari</p>";
	}
	?>
	</center>
</body>
</html>