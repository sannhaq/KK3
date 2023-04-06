<!-- Pakai Ternary -->
<?php
    $nilai = 85;
    $hasil = ($nilai > 70 ?  "Baik" : "Buruk");
    echo "hasilnya adalah $hasil dengan bilangan $nilai"
?>

<br>

<!-- Tanpa Ternary -->
<?php
    $nilai = 85;
    if ($nilai > 70){
        echo "Baik";
    }else{
        echo "buruk";
    }
    ?>