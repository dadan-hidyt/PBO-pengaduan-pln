<?php
require_once('../inti/koneksi.php');
if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['daftar'])){
    $password = $_POST['password'];
    unset($_POST['password']);
    //filter dulu inputan yang di ketikan dari user kecuali password
    $data = array_filter($_POST, function($e) use ($mysql){
        return mysqli_real_escape_string($mysql, htmlspecialchars($e));
    });
    $data['password'] = md5($password);
    //extract data
    extract($data);
    //proses insert data
    $insert = mysqli_query($mysql, "INSERT INTO `users`(`nama`, `nik`, `role`, `password`, `email`) VALUES ('$nama','$nik','pengadu','$password','$email')");
    if($insert){
        header('location:../login.php?msg=1');
    } else {
        header('location:../buat_akun.php?msg=2&pesan='.mysqli_error($mysql));
    }
}