<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "rpl-vote";

$conn = new mysqli($host, $user, $pass, $db);

//$kode_benar="123";
//$nisn_benar="248218";
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
