<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai UN Siswa</title>
</head>
<body>
    <center>
        <div class="title">
            <h1>Dafttar Nilai UN Siswa</h1>
        </div>
        <div class="title2">
            <h2>SMKN 4 Bandung</h2>
        </div>
        <div class="border">
            <table cellpadding="10" id="border">
                <form action="" method="post">
                <tr>
                    <td>Nama</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td><input type="Number" name="bindo"></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td><input type="Number" name="math"></td>
                </tr>
                <tr>
                    <td>Nilai B. Inggris</td>
                    <td><input type="Number" name="bing"></td>
                </tr>
                <tr>
                    <td>Nilai Teori Kejuruan</td>
                    <td><input type="Number" name="kejuruan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="button"><input type="Submit" value="Hitung"></td>
                </tr>
                </form>
            </table>
        </div>
        <p class="hasil">
        <?php
            $bindo = $_POST['bindo'];
            $math = $_POST['math'];
            $bing = $_POST['bing'];
            $kejuruan = $_POST['kejuruan'];
            $total = ($bindo + $bing + $math + $kejuruan) /4;
            echo "Nilai Akhir nya adalah $total";
        ?>
    </p>
    </center>
</body>
</html>