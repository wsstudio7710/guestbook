<?php

include('../koneksi.php');

  $nama           = $_POST['nama'];
  $email          = $_POST['email'];
  $pesan          = $_POST['pesan'];
  $tanggal        = date('Y-m-d');

  if ($_POST['submit']) {
    // data akan disimpan baru
    $input = $koneksi->query("INSERT INTO databukutamu(nama, email, tanggal, pesan ) VALUES ('$nama','$email','$tanggal','$pesan')") or die($koneksi->error);
    if ($input) {
        // jika simpan sukses
        echo "<script>
            alert('data anda berhasil di kirim');
        </script>";
    } else {
        echo "<script>
            alert('gagal mengirim data');
        </script>";
    }
}
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
    <h2>Tulis Buku Tamu!</h2>
    <hr>
    <div class="card text-left">
      <div class="card-body">
        <form action="buku.tamu.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama"  placeholder="masukkan nama anda..." class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email anda..." class="form-control" required>
          </div>
          <div class="form-group">
            <label for="judul">Isi Pesan</label>
            <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="isi pesan..." required></textarea>
          </div>
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Kirim</button>
          <a href="../index.php" class="btn btn-warning" >Kembali</a>
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