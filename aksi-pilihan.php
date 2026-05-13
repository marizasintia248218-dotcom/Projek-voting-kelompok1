<?php
echo $_POST['aksi-pilihan'];
// exit();
$query = "SELECT * FROM users WHERE username='".$_POST['aksi-pilihan']."'";