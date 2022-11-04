<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "web-blended22";

//Buat Koneksi ke database
$conn = mysqli_connect($serverName,$userName,$password,$dbName);

//Cek koneksi ke Database
    if (!$conn) {
        die("Koneksi gagal". mqsqli_connect_error());
    }

?>