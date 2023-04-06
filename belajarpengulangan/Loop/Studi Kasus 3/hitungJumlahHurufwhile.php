<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Jumlah Huruf</title>
</head>
<body>
<h1>Hitung Jumlah Huruf</h1>
<form method="post">
    <table>
        <tr>
            <td>Masukkan Kalimat</td>
            <td><input type="text" name="kalimat" value="<?php echo isset($_POST['kalimat']) ? $_POST['kalimat'] : ''; ?>"></td>
            <td><input type="radio" name="input" value = "a"></td>
            <td>a</td>
            <td><input type="radio" name="input" value = "i "></td>
            <td>i</td>
            <td><input type="radio" name="input" value = "u"></td>
            <td>u</td>
            <td><input type="radio" name="input" value = "e"></td>
            <td>e</td>
            <td><input type="radio" name="input" value = "o"></td>
            <td>o</td>
            <td><input type="submit" value="Hitung"></td>
        </tr>
    </table>
</form>
    <?php
        $kal = $_POST ['kalimat'];
        $huruf = $_POST['input'];
        $jumlah = 0;
        $i = 0;
    
        while($i< strlen($kal)){
            if($kal[$i] == $huruf){
            $jumlah++;
        }
        $i++;
        }
        echo "Jumlah huruf $huruf pada kalimat <b>$kal</b> adalah $jumlah";
?>
</body>
</html>
