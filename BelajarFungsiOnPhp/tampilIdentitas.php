<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Identitas</title>
</head>
<body>
    <?php
        function tampil_identitas($nama, $kelas, $alamat) {
            echo 'Nama Saya '. $nama . '</br>';
            echo 'Kelas Saya '. $kelas . '</br>';
            echo 'Alamat Saya '. $alamat . '</br>';
        }

        function hitung_umur($tahun_lahir, $tahun_sekarang){
            return $tahun_sekarang - $tahun_lahir;
        }
        tampil_identitas('Ilham', 'XI RPL', 'Bandung');
        $umur_saya = hitung_umur(2004,2020);
        echo 'umur saya '. $umur_saya. 'tahun';
    ?>
</body>
</html>