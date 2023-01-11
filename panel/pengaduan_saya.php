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
    <title>PENGADUAN SAYA- PENGADUAN PLN</title>
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
        <div class="bg-white p-4 rounded shadow-sm border">
        <h4 class="mb-3">List pengaduan yang sudah di kirim</h4>
          <table class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>KATEGORI</th>
                    <th>FILE PENDUKUNG</th>
                    <th>ISI PENGADUAN</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <thead>
                <tr>
                    <td>1</td>
                    <td>Jalan Rusak</td>
                    <td>Insfratuktures</td>
                    <td>a.jpg</td>
                    <td>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. A blanditiis quibusdam consequatur voluptates animi unde nisi sequi velit impedit perspiciatis repellendus, sit totam dicta minima, praesentium eos quas tenetur tempore!
                    </td>
                    <td>Aksi</td>
                </tr>
              </thead>
          </table>
        </div>
    </main>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>