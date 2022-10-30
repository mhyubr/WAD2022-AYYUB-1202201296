<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo-ead.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <title>EAD RENT | Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="ayyub_home.php">
                <img src="../img/logo-ead.png" alt="ead" width="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-2">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-secondary" href="ayyub_booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <section id="content">
        <form action="ayyub_booking.php" method="GET">
            <div class="container">
                <h2 class="text-center mt-5">WELCOME TO EAD RENT</h2>
                <p class="text-center mt-3">Find your best deal, here</p>
                <div class="row mt-5">
                    <div class="col-sm-4">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="../img/toyota-rush.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Toyota Rush</h5>
                                <p class="card-text text-muted">Rp. 200000 / Day</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary text-center"><strong>7 Kursi</strong></li>
                                <li class="list-group-item text-primary text-center"><strong>1500 CC</strong></li>
                                <li class="list-group-item text-primary text-center"><strong>Manual</strong></li>
                            </ul>
                            <div class="card-footer text-center py-4">
                                <button type="submit" class="btn btn-primary" name="car" value="Toyota Rush">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="../img/toyota-ayla.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Toyota Ayla</h5>
                                <p class="card-text text-muted">Rp. 150000 / Day</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary text-center"><strong>5 Kursi</strong></li>
                                <li class="list-group-item text-primary text-center"><strong>1200 CC</strong></li>
                                <li class="list-group-item text-primary text-center"><strong>Manual</strong></li>
                            </ul>
                            <div class="card-footer text-center py-4">
                                <button type="submit" class="btn btn-primary" name="car" value="Toyota Ayla">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mx-auto" style="width: 20rem;">
                            <br>
                            <img src="../img/honda-brio.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Honda Brio</h5>
                                <p class="card-text text-muted">Rp. 150000 / Day</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary text-center"><strong>5 Kursi</strong></li>
                                <li class="list-group-item text-primary text-center"><strong>1200 CC</strong></li>
                                <li class="list-group-item text-primary text-center"><strong>Automatic</strong></li>
                            </ul>
                            <div class="card-footer text-center py-4">
                                <button type="submit" class="btn btn-primary" name="car" value="Honda Brio">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- content -->
    <!-- footer -->
    <footer>
        <div class="footer text-center p-4 fixed-bottom">
            Created by Ayyub_1202201296
        </div>
    </footer>
    <!-- footer -->
</body>

</html>