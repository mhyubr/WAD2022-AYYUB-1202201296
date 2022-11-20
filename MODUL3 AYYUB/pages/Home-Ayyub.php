<?php

include('config/connector.php');

mysqli_num_rows(query("SELECT * FROM showroom_ayyub_table"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/bootstrap.css">
    <link rel="shortcut icon" href="asset/images/logo-ead.png" type="image/x-icon">
    <script src="asset/script/bootstrap.js"></script>
    <title>Show Room Ayyub | Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid my-2">
            <a class="navbar-brand" href="#">
                <img class="mx-5" src="asset/images/logo-ead.png" alt="Bootstrap" width="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bold active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <?php
                        if (mysqli_num_rows(query("SELECT * FROM showroom_ayyub_table")) != 0) {
                        ?>
                            <a class="nav-link text-light" href="pages/ListCar-Ayyub.php">MyCar</a>
                        <?php
                        } else {
                        ?>
                            <a class="nav-link text-light" href="pages/Add-Ayyub.php">MyCar</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-5 my-auto">
                <br><br><br><br>
                <h1 class="text-center" style="font-size: 70px;">Selamat Datang Di Show Room Ayyub</h1>
                <p class="text-muted " style="font-size: 20px; margin-left: 90px;">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
                <?php
                if (mysqli_num_rows(query("SELECT * FROM showroom_ayyub_table")) != 0) {
                ?>
                    <a class="btn btn-primary py-2 px-5 mt-5" style="font-size: 20px; margin-left: 90px;" href="pages/ListCar-Ayyub.php" role="button">MyCar</a>
                    <?php
                } else {
                    ?>
                    <a class="btn btn-primary py-2 px-5 mt-5" style="font-size: 20px; margin-left: 90px;" href="pages/Add-Ayyub.php" role="button">MyCar</a>
                <?php } ?>
                
                <br><br><br><br>
                <img src="asset\images\logo-ead.png" style="margin-left: 90px;" alt="" srcset="">
                <span class="text-muted ms-5">Ayyub_1202201296</span>
            </div>
            <div class="col-sm-5 mt-5 pt-5 ps-5">
                <img class="mt-5 ms-5" src="asset/images/home-car.png " alt="" srcset="">
            </div>
        </div>
    </div>
    <!-- content -->
</body>

</html>