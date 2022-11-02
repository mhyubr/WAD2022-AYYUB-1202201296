<?php

if (isset($_GET['car_type'])) {
    if ($_POST['car_type'] == "Toyota Rush") {
        $price = 200000;
    } elseif ($_POST['car_type'] == "Toyota Ayla") {
        $price = 150000;
    } elseif ($_POST['car_type'] == "Honda Brio") {
        $price = 150000;
    } else {
        $price = 0;
    }
}

$service_price = 0;
if (isset($_POST['services'])) {
    foreach ($_POST['services'] as $service) {
        if ($service == 'Health Protocol') {
            $service_price += 25000;
        } elseif ($service == 'Driver') {
            $service_price += 100000;
        } elseif ($service == 'Fuel Filled ') {
            $service_price += 250000;
        }
    }
}

$total_price = $price * (int)$_POST['duration'] + $service_price;

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
    <title>EAD RENT | My Booking</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="ayyub_booking.php">
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
                        <a class="nav-link text-light" href="#">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- content -->
    <div class="section" id="content">
        <div class="container-fluid">
            <h3 class="text-center mt-4">Thank You <?= $_POST['name'] ?> for Reserving</h3>
            <p class="text-center">Please double check your reservation details</p>
            <!-- table -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row"><?= rand() ?></th>
                        <td><?= $_POST['name'] ?></td>
                        <td><?= $_POST['book_date'] . " " . $_POST['start_time'] . ":00"; ?></td>
                        <td><?= date('Y-m-d', strtotime($_POST['book_date'] . ' + ' . $_POST['duration'] . ' days')) . " " . $_POST['start_time'] . ":00" ?></td>
                        <td><?= $_POST['car_type'] ?></td>
                        <td><?= $_POST['phone_number'] ?></td>
                        <td>
                            <ul>
                                <?php

                                if (isset($_POST['services'])) {

                                    $services = $_POST['services'];
                                    for ($i = 0; $i < count($services); $i++) {
                                        echo "<li>"  . $services[$i] . "</li>";
                                    }
                                } else {
                                    echo "No service";
                                }

                                ?></ul>
                        </td>
                        <td>
                            Rp. <?= $total_price; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- table -->
        </div>
    </div>
    <!-- content -->
    <!-- navbar -->
    <footer>
        <div class="footer text-center p-4 fixed-bottom">
            Created by Ayyub_1202201296
        </div>
    </footer>
    <!-- footer -->
</body>

</html>
