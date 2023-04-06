<?php
    include 'Lib/helper.php';

    sudahLogin();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'Lib/library.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = $mysqli->query("SELECT * FROM t_login WHERE username = '$username' AND password = SHA1('$password') ") or die($mysqli->error);

        if ($data->num_rows != 0) {
            $row = mysqli_fetch_object($data);
            $_SESSION['username'] = $row->username;
            $_SESSION['level'] = $row->level;

            header('location: index.php');
        } else {
            $error = "Username atau password salah";
        }
    }

    include 'Views/v_login.php';
?>