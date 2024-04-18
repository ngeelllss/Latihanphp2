<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
    // tampilkan informasi login
    $username = $_COOKIE['username'];
    $email = $_COOKIE['email'];
  
    echo "Selamat datang, $username! <br>";
    echo "Email: , $email <br>";
    echo "Waktu login: " . date("H:i:s")."<br>";
    echo "Tanggal login: " . date("Y-m-d")."<br>";
}
?>