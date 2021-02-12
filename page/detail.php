<?php

include('../koneksi.php');

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Detail Buku Tamu</h2>
        <hr>
        <div class="card">
            <div class="card-body">
                <?php
                $res = $koneksi->query("SELECT *FROM databukutamu WHERE id") or die($koneksi->error);
                if ($res->num_rows) {
                    while ($row = $res->fetch_assoc()) {
                        echo '
                                    <table class="table" border="1">
                                    <thead>
                                        <tr>
                                            <th width="100px">Nama</th>
                                            <th width="250px">Email</th>
                                            <th width="120px">Tanggal</th>
                                            <th width="380px">Pesan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> ' . $row['nama'] . '</td>
                                            <td> ' . $row['email'] . '</td>
                                            <td> ' . $row['tanggal'] . '</td>
                                            <td>' . $row['pesan'] . '</td>
                                            <td> <div class="buttonkhusus">
                                <a class="btn btn-primary" href="./edit.php?hal=edit&id=' . $row['id'] . '">edit</a>
                                <a class="btn btn-danger" href="detail.php?hal=hapus&id=' . $row['id'] . '">delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                ';
                    }
                } else {
                    echo 'Belum ada data buku tamu';
                }
                if ($_GET['hal'] == "hapus") {
                    //Persiapan hapus data
                    $hapus = $koneksi->query("DELETE FROM databukutamu WHERE id = '$_GET[id]' ");
                    if ($hapus) {
                        echo "<script>
                                                        alert('Hapus Data Suksess!!');
                                                        document.location='detail.php';
                                                </script>";
                    }
                }
                ?>
            </div>
        </div>
        <br>
        <a href="./tambah.php" class="btn btn-success">Tambah Buku Tamu</a>
        <a href="../index.php" class="btn btn-warning">Kembali</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>