<?php
// Simpan data dari form login ke dalam variabel
$username = $_POST['username'];
$email = $_POST['email'];

// Check login
if (empty($_POST['username']) || empty($_POST['email'])) {
   // Jika Data ada yang kosong redirect ke halaman LoginError_no2
    header ("Location:logineror_2.php");
}
elseif($username === "angel" && $email === "angel@gmail.com") {
    // Jika login berhasil, set cookie username dan redirect ke halaman LoginInformasi_no2
    setcookie("username", $username);
    setcookie("email", $email);
    header("Location:logininformasi_2.php");
    exit();
}
elseif($username != "angel" || $email != "angel@gmail.com") {
    // Jika Data tidak lengkap, redirect ke halaman LoginIncomlete_no2
    header ("Location:logininformasi_2.php");
}
?>