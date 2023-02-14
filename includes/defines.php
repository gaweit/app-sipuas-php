<?php
error_reporting(E_ALL ^ E_DEPRECATED);
// define("hostDb","localhost");
// define("userDb","root");
// define("passDb","");
// define("database","cpka");

$hostDb = "localhost";
$userDb = "root";
$passDb = "";
$database = "cpka";

$koneksi = mysql_connect($hostDb,$userDb,$passDb) or die("Koneksi gagal");
mysql_select_db($database,$koneksi) or die("Database tidak bisa dibuka");
?>
