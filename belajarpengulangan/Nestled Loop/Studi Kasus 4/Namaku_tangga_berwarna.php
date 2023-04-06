<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tangga berwarna</title>
</head>
<body>
    <h1>Tangga Berwarna</h1>
    <form  method="post">
    <table>
        <tr>
            <td>Jumlah Anak Tangga</td>
            <td colspan = "8"><input type="number" name="jumlah" value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td><input type="radio" name="input" value = "green"></td>
            <td>Hijau</td>
            <td><input type="radio" name="input" value = "purple"></td>
            <td>Ungu</td>
            <td><input type="radio" name="input" value = "yellow"></td>
            <td>Kuning</td>
            <td><input type="radio" name="input" value = "blue"></td>
            <td>Biru</td>
            <td><input type="radio" name="input" value = "grey"></td>
            <td>Abu</td>
        </tr>
        <tr  style = "text-align : center">
            <td colspan = "9" ><input type="submit" value="Buat Tangga"></td>
        </tr>
    </table>
    </form>
    
    <?php
        $jumlah = isset($_POST["jumlah"]) ? $_POST["jumlah"] : 0 ;
        $warna = isset($_POST["input"]) ? $_POST["input"] : '' ;
        $balok = "<div style =\"width : 20px; height : 20px ; background-color : $warna ; margin : 1px\"></div>";
        for ($i = 1; $i <= $jumlah ; $i++){
            echo "<div style = \"display : flex\">";
            for ($j = 1; $j<= $i ; $j++){
            echo "$balok";
            }
            echo "</div>";
    }
    ?>
</body>
</html>
