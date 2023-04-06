<!-- 1 aksi -->
<?php
    $t = date('d');
    echo 'hari ini adalah',
    ($t <= 10 ? ' awal bulan' : '')
?>

<br>
<!-- 2 aksi -->
<?php
    $t = date('d');
    echo 'hari ini adalah',
    ($t <= 10 ? ' awal bulan' : ' sudah lewat awal bulan');
?>

<br>
<!-- 3 Aksi -->
<?php
    $t = date('d');
    echo 'hari ini adalah ',
    ($t <= 10? 'awal bulan' : ($t <=20? 'pertengahan bulan' : 'akhir bulan')); 
?>

