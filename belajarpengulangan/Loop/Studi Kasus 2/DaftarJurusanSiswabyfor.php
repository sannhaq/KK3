<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jurusan</title>
</head>
<body>
    <center>
    <form action="" method="post">
            <h1>Daftar Jurusan Siswa</h1>
            <h2>SMKN 4 Bandung</h2>
            <label for="masukkan">Masukkan Jumlah Data</label>
            <input type="number" name="j_data" value="<?php echo isset($_POST['j_data']) ? $_POST['j_data'] : ''; ?>" required>
            <input type="Submit" value="ok">
    </form>
    <br><br>
    <table>
        <?php
            $data = $_POST['j_data'];
                for ($i = 1; $i <= $data; $i++){
                    echo "
                    <tr>
                        <td>Nama : </td>
                        <td><input type+ \"text\"></td>
                        <td>Jurusan :</td>
                        <td><input type= \"radio\" name=\"$i\"></input></td>
                        <td><label>RPL</label></td>
                        <td><input type= \"radio\" name=\"$i\"></input></td>
                        <td><label>TKJ</label></td>
                        <td><input type= \"radio\" name=\"$i\"></input></td>
                        <td><label>MM</label></td>
                        <td><input type= \"radio\" name=\"$i\"></input></td>
                        <td><label>AV</label></td>
                        <td><input type= \"radio\" name=\"$i\"></input></td>
                        <td><label>TITL</label></td>
                        <td><input type= \"radio\" name=\"$i\"></input></td>
                        <td><label>TOI</label></td>
                    </tr>
                    ";
                }
                echo "
                    <tr style = \"text-align: center\">
                        <td colspan = \"15\"><input type= \"submit\" value=\"Submit\"></input></td>
                    </tr>
                "
        ?>
    </table>
    </center>
</body>
</html>