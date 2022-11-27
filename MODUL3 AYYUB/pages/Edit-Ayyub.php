<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/bootstrap.css">
    <link rel="shortcut icon" href="../asset/images/logo-ead.png" type="image/x-icon">
    <script src="../asset/script/bootstrap.js"></script>
    <title>Show Room Ayyub | Detail</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid my-2">
            <a class="navbar-brand" href="#">
                <img class="mx-5" src="../asset/images/logo-ead.png" alt="Bootstrap" width="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bold active" href="#">MyCar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <div class="container">
        <br><br>
        <h2>BMW i4</h2>
        <p class="text-muted">Detail Mobil BMW i4</p>
        <br>
        <div class="row">
            <div class="col-sm-5">
                <div class="card" style="width: 30rem;">
                    <img src="../asset\images\car 1.png" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-sm-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold" value="BMW 14">Nama Mobil</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold" value="Ayyub - 1202201296">Nama Pemilik</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ayyub - 1202201296">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold" value="BMW">Merk</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Merk Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Tanggal Beli</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" value="11/12/2022" placeholder="Merk Mobil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold" value="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.
">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label fw-bold">Foto</label>
                        <input class="form-control" type="file" id="formFile" value="bmwi4.PNG">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Status Pembayaran</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked">
                            <label class="form-check-label" for="inlineRadio1">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary my-5 px-4">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- content -->
</body>

</html>