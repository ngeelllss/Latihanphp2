<?php
// Simpan data dari form login ke dalam variabel
$username = $_POST['username'];
$email = $_POST['email'];

// Check login
if($username === "angel" && $email === "angel@gmail.com") {
    setcookie("username", $username);
    setcookie("email", $email);
    header("Location: forminformasi.php");
    exit();
} else {
    // Jika login gagal, kembali ke halaman login
    echo "Login gagal. Silahkan Login kembali";
    echo '<br><a href="forminformasi.php">Kembali ke form Login</a>';
}
?>