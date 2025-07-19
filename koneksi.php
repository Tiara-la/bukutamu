<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bukutamu_db';
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi == false) {
    die('Koneksi gagal');
}
