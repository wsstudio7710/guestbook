<?php

include('../koneksi.php');
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$pesan          = $_POST['pesan'];
$tanggal        = date('Y-m-d');

    // data akan disimpan baru
    $update = $koneksi->query("UPDATE databukutamu SET nama='$nama', email='$email', tanggal='$tanggal', pesan='$pesan' WHERE id = '$id'");
    if ($update) {
        // jika simpan sukses
        echo "<script>
            alert('data anda berhasil di perbaharui');
            document.location='./detail.php';
        </script>";
    } else {
        echo "<script>
            alert('gagal mengirim data');
        </script>";
}

?>