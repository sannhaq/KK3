<?php
    include 'Lib/library.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['id_kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $nama_ibu_kandung = $_POST['nama_ibu_kandung'];
        $nis_lama = $_POST['nis_lama'];
        $file = $_POST['foto'];

        $foto = $_FILES['foto'];
        if (!empty($foto) AND $foto['error'] == 0){
            $file_name = $foto['name'];
            $file_tmp = $foto['tmp_name'];
            $file_destination = "Assets/images".$file_name;
            $imageFileType = strtolower(pathinfo($file_destination,PATHINFO_EXTENSION));

            // Check if file already exists
            if (file_exists($file_destination)) {
                flash("alert", "warning", "File sudah ada");
                header('location: index.php');
                return;
            }

            // Check file size
            if ($foto["size"] > 3000000) {
                flash("alert", "warning", "Ukuran file melebihi batas 3mb");
                header('location: index.php');
                return;
            }

            $ext = ['png', 'jpg', 'jpeg', 'gif'];
            if ( !in_array($imageFileType, $ext)) {
                flash("alert", "warning", "File hanya JPG, JPEG, PNG & GIF yang diperbolehkan");
                header('location: index.php');
                return;
            }

            $upload = move_uploaded_file($file_tmp, $file_destination);
            if (!$upload) {
                flash("alert", "error", "upload file gagal");
                header('location: index.php');
                return;
            }

            $file = $file_destination;
        }

        $sql = "UPDATE siswa SET nis = '$nis', nama_lengkap = '$nama_lengkap', jenis_kelamin = '$jenis_kelamin', id_kelas = '$kelas', jurusan = '$jurusan', alamat = '$alamat', golongan_darah = '$golongan_darah', nama_ibu_kandung = '$nama_ibu_kandung', file = '$file' WHERE nis = '$nis_lama'";

        $mysqli->query($sql) or die ($mysqli->error);

        header('location: index.php');
    }
    $sql = "SELECT * FROM kelas";
    $dataKelas = $mysqli->query($sql) or die ($mysqli->error);

    $nis = $_GET['nis'];

    if(empty($nis)) header('location: index.php');

    $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
    $query = $mysqli->query($sql);
    $siswa = $query->fetch_array();

    if(empty($siswa)) header('location: index.php');

    include 'Views/v_tambah.php';
?>