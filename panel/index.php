<?php session_start();
if (!isset($_SESSION['login'])) {
    header('location:../login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>LOGIN - PENGADUAN PLN</title>
    <style>
        .card,
        .card-header {
            border: none;
            border-radius: 10;
        }
    </style>
</head>

<body>

<?php include('_navbar.php');  ?>

    <main class="container" style="margin-top:80px;">
        <div class="bg-light p-5 rounded">
            <h1>Selamat datang <?= $_SESSION['nama']; ?></h1>
            <p class="lead">
                Selamat datang di pengaduan online PLN Kabupaten konoha!
            </p>
            <a class="btn btn-lg btn-primary" href="buat_pengaduan.php" role="button">Buat Pengaduan&raquo;</a>
        </div>
    </main>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>