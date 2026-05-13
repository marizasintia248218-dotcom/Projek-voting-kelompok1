<?php
// echo $_POST['nisn'];
// echo $_POST['kode'];
// exit();

include "./config.php";
$query = "SELECT * FROM users WHERE username='".$_POST['nisn']."'";

// exit();
//cek email dan password
//email: admin@gmail.id
//password: admin123
$result = $conn->query($query);

// exit();

//echo "jumlah data: ";
// echo $result->num_rows;
//echo "<br /> <br />";
// exit();

$row = $result->fetch_assoc();

// exit();

if ($result->num_rows == 0) {
  // jika num_rows = 0 berarti tidak ada data yang ditemukan dari database 
  // echo "Akun tidak ditemukan";
  header("location:halaman2.php");
  exit(); // langsung akhiri eksekusi tanpa harus lanjut ke bawah
} else {
  if ($_POST['kode'] == $row['password']) {
    // echo "Anda berhasil login";
    header("location:halaman3.php"); 
  } else {
    // echo "Password anda salah";
    header("location:halaman2.php");
  }
}
