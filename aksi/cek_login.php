<?php session_start();
require_once('../inti/koneksi.php');
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    //cek user dari db
    $check = mysqli_query($mysql, "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'");
    if($check && mysqli_num_rows($check) > 0){
        $result = mysqli_fetch_assoc($check);
        $_SESSION['role'] = $result['role'];
        $_SESSION['nama'] = $result['nama'];
        $_SESSION['nik'] = $result['nik'];
        $_SESSION['login'] = true;
        header('location:../panel');
    } else {
        header('location:../login.php?msg=2&pesan=email atau password salah');
    }
} else {
    echo 'dada';
}