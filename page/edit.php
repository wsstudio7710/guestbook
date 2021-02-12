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
    <?php
    $id = $_GET['id'];

    $show = $koneksi->query("SELECT * FROM databukutamu WHERE id = '$id'");
    if (mysqli_num_rows($show) == 0) {
        echo "<script>window.history.back();</script>";
    } else {
        $row = mysqli_fetch_assoc($show);
    }
    ?>
    <div class="container">
        <h2>Update Buku Tamu!</h2>
        <hr>
        <div class="card text-left">
            <div class="card-body">
                <form action="proses-edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="masukkan nama anda..." class="form-control" value="<?php echo $row['nama']; ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan email anda..." class="form-control" value="<?php echo $row['email']; ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Isi Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="isi pesan..."required > <?php echo $row['pesan']; ?></textarea>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Kirim</button>
                    <a href="./detail.php" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>