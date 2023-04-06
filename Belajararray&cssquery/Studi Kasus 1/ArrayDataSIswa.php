<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
<style type="text/css">
    body{
        background-color: #8D7B68
    }
    table {
        width: 80%;
        background-color: #fff;
        font-family: Arial, sans-serif, calibri;
        border: 1px solid #fff;
        table-layout: fixed;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(2n + 1) {
        background-color: #C7E8CA;
    }
    tr:nth-child(2n) {
        background-color: #DDF7E3;
    }
	</style>
</head>
<body>
    <center>
        <h1>DATA SISWA MIF</h1>
        <table>
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $siswa = array(
                        array("nis" => "1314115690", "nama" => "Bruce Banner", "kelas" => "MIF 1", "jurusan" => "MIF"),
                        array("nis" => "1314115692", "nama" => "Stephen Strange", "kelas" => "MIF 2", "jurusan" => "MIF"),
                        array("nis" => "1314115693", "nama" => "Matt Murdock", "kelas" => "MIF 3", "jurusan" => "MIF"),
                        array("nis" => "1314115699", "nama" => "Peter Parker", "kelas" => "MIF 1", "jurusan" => "MIF"),
                    );
                    
                    foreach ($siswa as $data) {
                        echo "<tr>";
                        echo "<td>".$data['nis']."</td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['kelas']."</td>";
                        echo "<td>".$data['jurusan']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </center>
</body>
</html>