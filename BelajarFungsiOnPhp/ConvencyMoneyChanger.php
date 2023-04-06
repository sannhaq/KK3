<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Changer</title>
</head>
<style>
    table, tr, th, td{
        border: 1px solid black;
    }
</style>
<body>
    <center>
        <h1>MONEY CHANGER</h1>
        <table>
            <tr>
                <th>Mata Uang Asing</th>
                <th>Mata Uang Indonesia</th>
            </tr>
            <tr>
                <td>Dollar Amerika</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>Dollar Singapur</td>
                <td>7000</td>
            </tr>
            <tr>
                <td>Yen</td>
                <td>4000</td>
            </tr>
            <tr>
                <td>Won</td>
                <td>11</td>
            </tr>
        </table>

        <h1>Transaksi</h1>
        <form method="post">
            <label for="nominal">Uang Dalam Rupiah Rp. </label>
            <input type="number" name="nominal" value="<?= @$_POST['nominal']?>">
            <select name="m_uang">
                <option value="usd" <?php if(@$_POST['m_uang']=='usd') echo'selected'?>>Dollar Amerika</option>
                <option value="sgd" <?php if(@$_POST['m_uang']=='sgd') echo'selected'?>>Dollar Singapur</option>
                <option value="yen" <?php if(@$_POST['m_uang']=='yen') echo'selected'?>>Yen</option>
                <option value="won" <?php if(@$_POST['m_uang']=='won') echo'selected'?>>Won</option>
            </select>
            <input type="submit" value="Konversi">
        </form>
        <br>
        <?php
        if (!isset($_POST['nominal'])) die;
        $conversition = [
            'usd' => 12000,
            'sgd' => 7000,
            'yen' => 4000,
            'won' => 11,
        ];

        $nominal = $_POST['nominal'];
        $m_uang = $_POST['m_uang'];

        $hasil = $nominal / $conversition[$m_uang];
        echo "Rp. $nominal = $hasil $m_uang";
        ?>
    </center>
</body>
</html>