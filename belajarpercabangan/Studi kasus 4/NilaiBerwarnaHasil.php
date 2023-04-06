<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <center>
    <table>
        <tr>
            <tr>
                <td>Nama Siswa </td>
                <td>:</td>
                <td>
                    <?php
                        $nama = $_POST['nama'];
                        echo $nama;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas </td>
                <td>:</td>
                <td>
                    <?php
                        $tugas = $_POST['tugas'];
                        echo $tugas;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nilai Tes Harian </td>
                <td>:</td>
                <td>
                    <?php
                        $uh = $_POST['uh'];
                        echo $uh;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nilai UTS </td>
                <td>:</td>
                <td>
                    <?php
                        $uts = $_POST['uts'];
                        echo $uts;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nilai UAS </td>
                <td>:</td>
                <td>
                    <?php
                        $uas = $_POST['uas'];
                        echo $uas;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nilai Akhir </td>
                <td>:</td>
                <td>
                    <?php
                        $tugas = $_POST['tugas'];
                        $uh = $_POST['uh'];
                        $uts = $_POST['uts'];
                        $uas = $_POST['uas'];
                        $nilai_akhir = (($tugas*0.2 + $uh*0.1 + $uts*0.3 + $uas*0.4));
                        echo $nilai_akhir;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nilai Index </td>
                <td>: </td>
                <td>
                    <p style="color: <?php
                        if ($nilai_akhir >= 80) {
                            echo ("green");
                        } elseif ($nilai_akhir >= 70) {
                            echo ("blue");
                        } elseif ($nilai_akhir >= 60) {
                            echo ("yellow");
                        } elseif ($nilai_akhir >= 50) {
                            echo ("orange");
                        } elseif ($nilai_akhir < 50) {
                            echo ("red");
                        }
                    ?>">
                    <?php
                        if ($nilai_akhir >= 80) {
                            echo "A";
                        } elseif ($nilai_akhir >= 70) {
                            echo "B";
                        } elseif ($nilai_akhir >= 60) {
                            echo "C";
                        } elseif ($nilai_akhir >= 50) {
                            echo "D";
                        } elseif ($nilai_akhir < 50) {
                            echo "E";
                        }
                    ?>
                    </p>
                </td>
            </tr>
        </tr>
    </table>
    </center>
</body>
</html>