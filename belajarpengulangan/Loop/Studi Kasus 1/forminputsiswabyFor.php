<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa | Studi Kasus 1</title>
    <style>
        body{
            background-color: #9DC08B;
        }
    </style>
</head>
<body>
    <h1>Form Input Data Siswa</h1>
    <form action="" method="Post">
        <label for="nama">Masukkan jumlah siswa </label>
        <input type="number" name="jumlah" id="jumlah" value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?>" required>
        <input type="Submit" name="submit" value="ok">
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <?php
            $jumlah =  $_POST['jumlah'];
                for ($i = 1; $i <= $jumlah; $i++ ){
                    echo "
                    <tr>
                    <td><input type='text' value=$i></td>
                    <td><input type='text' ></td>
                    <td><input type='text' ></td>
                    <td><input type='text' ></td>
                    </tr>
                    ";
                }
        ?>
    </table>
</body>
</html>