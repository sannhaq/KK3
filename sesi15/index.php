<?php 
    include 'Lib/helper.php';

    cekLogin();

    include 'Lib/library.php';
    $sql = 'SELECT * FROM siswa INNER JOIN kelas ON (siswa.id_kelas = kelas.id_kelas)';

    // Searching
    $search = @$_GET['search'];
    if (!empty($search)) $sql .=" WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR id_kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%' OR golongan_darah LIKE '%$search%' OR nama_ibu_kandung LIKE '%$search%' ";

    // Ordering
    $sort_by = @$_GET['sort'];
    $order_by = @$_GET['order'];
    if (!empty($sort_by) && !empty($order_by)) $sql .= " ORDER BY $sort_by $order_by";

    $listsiswa = $mysqli -> query($sql) or die ($mysqli -> error);

    include 'Views/v_index.php';
?>