<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Date</title>
</head>
<body>
    <?php
        date_default_timezone_set('Asia/Jakarta');
        echo"Ini format tanggal Indonesia : ";
        echo date("d F Y"). '</br>';
        echo"Ini format tanggal System : ";
        echo date("l, F d, Y"). '</br>';
        echo"Ini format data Database : ";
        echo date("Y-m-d"). '</br>';
        echo"Ini format waktu System : ";
        echo date("g:i A"). '</br>';
        echo"Ini format waktu Indonesia : ";
        echo date("G:i"). '</br>';
    ?>
</body>
</html>