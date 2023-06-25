<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'siska';

$connect = mysqli_connect ($server, $username, $password, $database);

if ($connect == true) {
    echo 'koneksi berhasil';
} else {
    echo 'koneksi gagal' . mysqli_connect_error();
}

?>