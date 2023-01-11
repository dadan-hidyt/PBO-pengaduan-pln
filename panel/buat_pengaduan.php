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
    <title>BUAT PENGADUAN - PENGADUAN PLN</title>
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

    <main class="container mb-4" style="margin-top:80px;">
        <div class="bg-light p-5 rounded shadow-sm border">
           <form method="POST" action="">
                <div class="mb-3">
                    <label for="judul">JUDUL</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="mb-3">
                    <label for="judul">KAGEGORI</label>
                    <input type="text" placeholder="Contoh: Jalan Rusak" class="form-control" name="kategori">
                </div>
                <div class="mb-3">
                    <label for="file_pendukung">FIle Pendukung</label>
                    <input type="file" name="file" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="ISI PENGADUAN">ISI PENGADUAN</label>
                    <textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" name="buat">BUAT PENGADUAN</button>
           </form>
        </div>
    </main>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>