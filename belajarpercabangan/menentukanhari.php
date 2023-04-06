<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan hari</title>
</head>
<body>
    <?php
        $hari="minggu";
        $tanggal=2;

        if($hari=="minggu"){
            if($tanggal<=10){
                echo "Selamat berakhir pekan pada tanggal muda :d";
            } else {
                echo "Selamat berakhir pekan pada tanggal tua dan tetap semangat :d";
            }
        } else {
            echo "Semoga hari anda menyenangkan";
            echo "Sampai jumpa di akhir pekan";
        }
    ?>
</body>
</html>