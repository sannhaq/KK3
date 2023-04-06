<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai Rapot</title>
    <style>
        th{
            text-align: left;
        }
    </style>
</head>
<body>
    <center>
    <h1>Nilai Rapot dan Index</h1>
        <table>
            <form method="POST" action="NilaiBerwarnaHasil.php">
                <tr>
                    <th><label for="nama">Nama Siswa:</label></th>
                    <td><input type="text" name="nama" id="nama" required><br></td>
                </tr>
                <tr>
                    <th><label for="tugas">Nilai Tugas:</label></th>
                    <td><input type="number" name="tugas" id="tugas"required><br></td>
                </tr>
                <tr>
                    <th><label for="uh">Nilai Ulangan Harian:</label></th>
                    <td><input type="number" name="uh" id="uh"required><br></td>
                </tr>
                <tr>
                    <th><label for="uts">Nilai UTS:</label></th>
                    <td><input type="number" name="uts" id="uts"required><br></td>
                </tr>
                <tr>
                    <th><label for="uas">Nilai UAS:</label></th>
                    <td><input type="number" name="uas" id="uas"required><br></td>
                </tr>
                <tr>
                    <td style="border: none"><input type="submit" name="submit" value="kirim"></td>
                </tr>
            </form>
        </table>
	</form>
    </center>
</body>
</html>
