<?php

$server = "localhost";
$username = "uli";
$password = "@Homedata123";
$nama_db = "absensi_qrcode";

$koneksi = new mysqli($server, $username, $password, $nama_db);

if ($koneksi->connect_errno) {
    die("Koneksi Gagal".$koneksi->connect_error);
}
