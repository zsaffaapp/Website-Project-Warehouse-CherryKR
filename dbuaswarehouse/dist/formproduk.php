<?php

$servername = "localhost";
$username = "root";
$password = "";
$nama_database = "dbuaswarehouse";

//create connection
$koneksi = new mysqli ($servername, $username, $password, $nama_database);

//check connection
if ($koneksi->connect_error) {
    die ("connection failed :" . $koneksi->connect_error);
}

?>