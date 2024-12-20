<?php

$dbhost = "localhost";
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_pelanggan';

// Create connection
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>
