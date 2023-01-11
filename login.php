<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>LOGIN - PENGADUAN PLN</title>
    <style>
        .card,
        .card-header{
            border:none;
            border-radius: 10;
        }
       
    </style>
</head>
<body>
    <!-- halaman login -->
        <div class="container">
            <div class="col-md-4 mt-5 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-warning text-white">
                        <div class="card-title">
                            <h4>LOGIN</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php 
                            if(isset($_GET['msg'])){
                                if($_GET['msg'] == '1'){
                                    ?>
                                    <p class="alert alert-success">Pendaftaran berhasil baraya! Silahkan login</p>
                                    <?php
                                }
                            }
                        ?>
                        <?php 
                            if(isset($_GET['msg'])){
                                if($_GET['msg'] == '2'){
                                    ?>
                                    <p class="alert alert-danger"><?= $_GET['pesan']; ?></p>
                                    <?php
                                }
                            }
                        ?>
                        <form action="aksi/cek_login.php" method="post">
                            <div class="mb-4">
                                <input type="text" name="email" placeholder="Ketikan Email Kamu Bang!" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" placeholder="Ketikan password Kamu Bang!" class="form-control">
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <button name="submit" class="btn btn-primary">LOGIN</button>
                                <a href="buat_akun.php" class="btn btn-warning text-white">DAFTAR</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- e:halaman login -->
</body>
</html>