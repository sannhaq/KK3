<!-- if -->
<?php
    $t = date("d");
    if ($t<= "10"){
        echo "awal bulan";
    }
?>

<!-- if - else -->
<?php
    $t = date("d");
    if ($t<= "10"){
        echo "awal bulan";
    }else {
        echo "sudah lewat awal bulan";
    }
?>
