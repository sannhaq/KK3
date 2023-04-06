<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- TOASTR -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Ikhsan Nurul Haq_XI PPLG 1</title>
</head>
<body class="p-2">
    <div class="table-responsive mb-3">
        <form action="index.php" method="GET">
            <?php if (!empty($sort_by) && !empty($order_by)) : ?>
                <input type="hidden" value="<?= $sort_by ?>" name="sort">
                <input type="hidden" value="<?= $order_by ?>" name="order">
            <?php endif ?>
            <table class="mx-auto">
                <tr class="d-flex justify-content-center align-items-center">
                    <td><a href="?" class="btn btn-outline-secondary ri-restart-line"></a></td>
                    <td><input type="text" name="search" class="form-control pr-5" placeholder="Masukkan Data" value="<?= @$search ?>"></td>
                    <td><button type="Submit" class="btn btn-primary ri-search-2-line"></button></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table border table-bordered table-striped mx-auto table-hover">
            <thead>
                <tr class="bg-dark text-white text-nowrap">
                    <th>#</th>
                    <th>Foto</th>
                    <th>NIS
                        <a href="?sort=nis&order=asc" class="link">▲</a>
                        <a href="?sort=nis&order=desc" class="link">▼</a>
                    </th>
                    <th>Nama Lengkap
                        <a href="?sort=nama_lengkap&order=asc" class="link">▲</a>
                        <a href="?sort=nama_lengkap&order=desc" class="link">▼</a>
                    </th>
                    <th>Jenis Kelamin
                        <a href="?sort=jenis_kelamin&order=asc" class="link">▲</a>
                        <a href="?sort=jenis_kelamin&order=desc" class="link">▼</a>
                    </th>
                    <th>Kelas
                        <a href="?sort=kelas&order=asc" class="link">▲</a>
                        <a href="?sort=kelas&order=desc" class="link">▼</a>
                    </th>
                    <th>Jurusan
                        <a href="?sort=jurusan&order=asc" class="link">▲</a>
                        <a href="?sort=jurusan&order=desc" class="link">▼</a>
                    </th>
                    <th>Alamat
                        <a href="?sort=alamat&order=asc" class="link">▲</a>
                        <a href="?sort=alamat&order=desc" class="link">▼</a>
                    </th>
                    <th>Golongan Darah
                        <a href="?sort=golongan_darah&order=asc" class="link">▲</a>
                        <a href="?sort=golongan_darah&order=desc" class="link">▼</a>
                    </th>
                    <th>Ibu Kandung
                        <a href="?sort=nama_ibu_kandung&order=asc" class="link">▲</a>
                        <a href="?sort=nama_ibu_kandung&order=desc" class="link">▼</a>
                    </th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $i = 1;
                    while ($siswa = $listsiswa -> fetch_array()) {
                ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td>
                            <img src="<?= @$siswa['file'] ? $siswa['file'] : 'Assets/images/imagesultramennyapu.jpeg' ?>" width="100">
                        </td>
                        <td><?= $siswa['nis'] ?></td>
                        <td class="text-nowrap"><?= $siswa['nama_lengkap'] ?></td>
                        <td><?= $siswa['jenis_kelamin'] ?></td>
                        <td><?= $siswa['nama_kelas'] ?></td>
                        <td class="text-nowrap"><?= $siswa['jurusan'] ?></td>
                        <td class="text-nowrap"><?= $siswa['alamat'] ?></td>
                        <td><?= $siswa['golongan_darah'] ?></td>
                        <td class="text-nowrap"><?= $siswa['nama_ibu_kandung'] ?></td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="edit.php?nis=<?= $siswa['nis'] ?>" class="btn btn-outline-dark ri-pencil-fill" style="margin-right: .3rem"></a>
                                <a href="delete.php?nis=<?= $siswa['nis'] ?>" class="btn btn-outline-danger ri-delete-bin-2-fill btnDelete"></a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <a href="logout.php" class="btn btn-danger ri-logout-box-line"></a>
            <a href="tambah.php" class="btn btn-success">Tambah Data</a>
        </div>
    </div>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success bg-blue-500 btnYa">Ya</button>
                    <button type="button" class="btn btn-danger bg-red-500" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JS BOOTSTRAP  -->
    <script 
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
        crossorigin="anonymous">
    </script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" 
        crossorigin="anonymous">
    </script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- JS TOASTR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".btnDelete").on("click", function(e) {
                e.preventDefault();
                var nama = $(this).parent().parent().parent().children()[3];
                console.log(nama);
                nama = $(nama).html();
                var tr = $(this).parent().parent();

                $(".modal").modal('show');
                $(".modal-title").html('Konfirmasi');
                $(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama + '</b> ?');

                var href = $(this).attr('href');
                
                $('.modal .btnYa').off()
                $('.modal .btnYa').on('click', function() {
                    $.ajax({
                        'url': href,
                        'type': 'GET',
                        'success': function(data) {
                            if (data == 1) {
                                $('.modal').modal('hide')
                                tr.fadeOut()

                                toastr.success(`Data ${nama} berhasil dihapus`,
                                    'BERHASIL')
                            } else {
                                toastr.error(`Data ${nama} gagal dihapus`, 'GAGAL')
                            }
                        }
                    })
                });
            });
        });
    </script>
</body>
</html>