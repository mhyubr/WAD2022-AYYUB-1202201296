<?php
$gambar = "";
$selected = "";
if (isset($_POST['car'])) {
    if ($_GET['car'] == "Toyota Rush") {
        $gambar = "../img/toyota-rush.png";
        $selected = "Toyota Rush";
    } elseif ($_GET['car'] == "Toyota Ayla") {
        $gambar = "../img/toyota-ayla.png";
        $selected = "Toyota Ayla";
    } elseif ($_GET['car'] == "Honda Brio") {
        $gambar = "../img/honda-brio.png";
        $selected = "Honda Brio";
    }
} else {
    $gambar = "../img/toyota-rush.png";
    $selected = "Pilih jenis mobil";
}
?>

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
    <title>EAD RENT | Booking</title>
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
                        <a class="nav-link active text-secondary" aria-current="page" href="ayyub_home.php">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light" href="ayyub_booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <section id="content">
        <div class="container-fluid">
            <h3 class="text-center mt-4">Rent your car now!</h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-sm-5 my-auto text-center">
                    <img src="<?= $gambar; ?>" alt="" width="700px" srcset="">
                </div>
                <div class="col-sm-5">
                    <form action="ayyub_mybooking.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" name="name" value="Ayyub_1202201296" aria-describedby="emailHelp" readonly style="background-color: #e6e6e6;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Book Date</label>
                            <input type="date" class="form-control" id="book_date" name="book_date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="start_time" name="start_time">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Duration (Days)</label>
                            <input type="number" class="form-control" id="duration" name="duration">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Car Type</label>
                            <select class="form-select" aria-label="Default select example" id="car_type" name="car_type">
                                <option value="<?= $selected; ?>" selected><?= $selected; ?></option>
                                <option value="Toyota Rush">Toyota Rush</option>
                                <option value="Toyota Ayla">Toyota Ayla</option>
                                <option value="Honda Brio">Honda Brio</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number">
                        </div>
                        <label for="">Add Service(s)</label>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="Health Protocol" name="services[]" value="Health Protocol">
                            <label class="form-check-label" id="Health Protocol" for="Health Protocol">Health Protocol / Rp 25.000</label>
                            <br>
                            <input type="checkbox" class="form-check-input" id="Driver" name="services[]" value="Driver">
                            <label class="form-check-label" id="Driver" for="Driver">Driver / Rp 100.000</label>
                            <br>
                            <input type="checkbox" class="form-check-input" id="Fuel Filled" name="services[]" value="Fuel Filled">
                            <label class="form-check-label" id="Fuel Filled" for="Fuel Filled">Fuel Filled / Rp 250.000</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
