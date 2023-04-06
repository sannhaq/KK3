<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKHSAN NURUL HAQ</title>
    <?php
        $action = 'tambah.php';
        if(!empty($siswa)) $action = 'edit.php';
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="p-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="offset-md-5">
            <h2 class="m-0">Tambah Daftar Siswa</h2>
        </div>
        <div>
            <a href="./" class="btn btn-success ri-close-fill" style="border-radius: 20px 5px 20px 5px;"></a>
        </div>
    </div>
    <hr>
    <?php if (!empty($success)) {?>
        <div class="alert alert-success">
            <p><?= $success ?></p>
        </div>
    <?php } ?>
    <?php if (!empty($error)) {?>
        <div class="alert alert-danger">
            <p><?= $error ?></p>
        </div>
    <?php } ?>
    <form action="<?= $action ?>" method="POST" class="mx-auto" enctype="multipart/form-data">
        <table class="table border table-bordered mx-auto table-striped" style="max-width: 500px">
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" value="<?= intval(@$siswa['nis']) ?>" <?= @$siswa['nis'] ? 'readonly' : '' ?> class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" placeholder="Masukkan Nama" value="<?= @$siswa['nama_lengkap'] ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>
                        Laki Laki
                    </label><br>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>> 
                        Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                <select name="id_kelas" class="form-control">
                    <option value="">[ Pilih Kelas ]</option>
                        <?php while ($kelasnya = $dataKelas->fetch_array()) :?>
                        <option value="<?= $kelasnya['id_kelas'] ?>"
                        <?= $kelasnya['id_kelas'] == @$siswa['id_kelas'] ? 'selected' : '' ?>>
                        <?= $kelasnya['nama_kelas'] ?>
                    </option>
                    <?php endwhile ?>
                </select>

                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" placeholder="Masukkan Jurusan" value="<?= @$siswa['jurusan'] ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukkan Alamat Tempat Tinggal" value="<?= @$siswa['alamat'] ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>
                    <select name="golongan_darah" class="form-control">
                        <option value="A" <?= @$siswa['golongan_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                        <option value="B" <?= @$siswa['golongan_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                        <option value="AB" <?= @$siswa['golongan_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                        <option value="O" <?= @$siswa['golongan_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Ibu Kandung</td>
                <td><input type="text" name="nama_ibu_kandung" class="form-control" value="<?= @$siswa['nama_ibu_kandung'] ?>"></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>
                    <?php if ($action == "edit") { ?>
                        <img src="Assets/images/<?= @$siswa['file'] ? $siswa['file'] :'default_picture.png' ?>" class="mb-3" width="100">
                        <input type="hidden" name="foto" value="<?php echo @$result->file?>">
                    <?php } ?>
                    <input class="form-control" type="file" name="foto" accept="image/*">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" class="btn btn-outline-success w-50 d-flex justify-content-center offset-md-3">Submit</button>
                </td>
            </tr>
        </table>
        <input type="hidden" name="nis_lama" value="<?= @$siswa['nis']?>">
        
    </form>
</body>
</html>