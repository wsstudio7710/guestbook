<?php 

error_reporting(E_ALL ^ (E_NOTICE));

$koneksi = mysqli_connect("localhost", "root", "", "tugas");

if(mysqli_connect_errno()){
    echo"Koneksi database gagal : " . mysqli_connect_error();
}

?>