<?php
    include 'Lib/helper.php';
    cekLogin();
    include 'Lib/library.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nis = @$_POST['nis'];
        $nama_lengkap = @$_POST['nama_lengkap'];
        $jenis_kelamin = @$_POST['jenis_kelamin'];
        $kelas = @$_POST['id_kelas'];
        $jurusan = @$_POST['jurusan'];
        $alamat = @$_POST['alamat'];
        $golongan_darah = @$_POST['golongan_darah'];
        $nama_ibu_kandung = @$_POST['nama_ibu_kandung'];
        $foto = @$_FILES['foto'];
        
        if (empty($nis)) {
            flash("alert", "warning", "Mohon masukkan <b>NIS</b> dengan benar");
        } else if (empty($nama_lengkap)) {
            flash("alert", "warning", "Mohon masukkan <b>NAMA</b> dengan benar");
        } else {
            
            if (!empty($foto) AND $foto['error'] == 0) {
                $file_name = $foto['name'];
                $file_tmp = $foto['tmp_name'];
                $file_destination = "Assets/images/".$file_name;
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
            }

            
            flash("alert", "success", "Tambah data siswa berhasil");

            $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, id_kelas, jurusan, alamat, golongan_darah, nama_ibu_kandung, file) 
                    VALUES ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$golongan_darah', '$nama_ibu_kandung', '$file_destination')";
    
            $mysqli->query($sql) or die ($mysqli->error);
            header('location: index.php');
        }
    }

    $sql = "SELECT * FROM kelas";
    $dataKelas = $mysqli->query($sql) or die ($mysqli->error);

    include 'Views/v_tambah.php';
?>