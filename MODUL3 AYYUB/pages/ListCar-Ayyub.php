<?php

include('../config/connector.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/bootstrap.css">
    <link rel="shortcut icon" href="../asset/images/logo-ead.png" type="image/x-icon">
    <script src="../asset/script/bootstrap.js"></script>
    <title>Show Room Ayyub | My Item</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid my-2 me-5 pe-5">
            <a class="navbar-brand" href="#">
                <img class="mx-5" src="../asset/images/logo-ead.png" alt="Bootstrap" width="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bold active" href="#">MyCar</a>
                    </li>
                </ul>
            </div>
            <a class="me-5 btn btn-light text-primary" href="../pages/Add-Ayyub.php">Add Car</a>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <div class="container">
        <br><br>
        <h2>My Show Room</h2>
        <p class="text-muted">List Show Room Ayyub - 1202201296</p>
        <br>
        <div class="row">
            <?php

            if (isset($_POST['submit'])) {

                if (tambah($_POST) > 0) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo 'Data Berhasil Ditambahkan!';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Data Gagal Ditambahkan!';
                    echo '</div>';
                }
            }

            if(isset($_GET['id'])) {
                
                $id = $_GET['id'];
                
                if (hapus($id) > 0) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Data Berhasil Dihapus!';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Data Gagal Dihapus!';
                    echo '</div>';
                }
            }

            ?>

            <?php

            $query = query("SELECT * FROM showroom_ayyub_table");

            if ($query) {
                while ($selects = mysqli_fetch_assoc($query)) {

            ?>
                    <!-- card -->
                    <div class="card mx-5 my-4" style="width: 18rem;">
                        <img src="../asset/images/car 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $selects['nama_mobil']; ?></h5>
                            <p class="card-text"></p><?= $selects['deskripsi']; ?>
                            <div class="text-center mt-3">
                                <!-- <form action="" method="get"> -->
                                <a href="#" class="btn btn-primary mx-2 px-4 rounded-pill">Detail</a>
                                <a href="?id=<?= $selects['id_mobil'] ?>" class="btn btn-danger mx-2 px-4 rounded-pill">Delete</a>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- card -->
            <?php
                }
            }
            ?>
            <div class="mt-3">
                <p>Jumlah Mobil: <?= mysqli_num_rows($query); ?></p>
            </div>
        </div>
        <!-- content -->
</body>

</html>