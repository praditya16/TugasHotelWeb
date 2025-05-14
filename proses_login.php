<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "ADMIN") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "ADMIN";
        header("Location: admin.php");
    } else if ($data['level'] == "USER") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "USER";
        header("Location: user.php");
    } else {
        header("Location: login.php");
    }
}
