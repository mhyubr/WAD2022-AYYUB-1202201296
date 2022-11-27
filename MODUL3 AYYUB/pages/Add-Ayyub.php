<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/bootstrap.css">
    <link rel="shortcut icon" href="../asset/images/logo-ead.png" type="image/x-icon">
    <script src="../asset/script/bootstrap.js"></script>
    <title>Show Room Ayyub | Add Item</title>
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
                        <a class="nav-link text-light" aria-current="page" href="../index.php">Home</a>
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
            <h2>Tambah Mobil</h2>
            <p class="text-muted">Tambah Mobil baru anda ke list show room</p>
            <br>
        <form action="ListCar-Ayyub.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" placeholder="Nama Mobil" required>
            </div>
            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" name="pemilik_mobil" id="pemilik_mobil" placeholder="Ayyub - 1202201296" required>
            </div>
            <div class="mb-3">
                <label for="merk_mobil" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" name="merk_mobil" id="merk_mobil" placeholder="Merk Mobil" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli" placeholder="Merk Mobil" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="foto_mobil" class="form-label fw-bold">Foto</label>
                <input class="form-control" type="file" name="foto_mobil" id="foto_mobil" required>
            </div>
            <div class="mb-3">
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="Lunas" value="Lunas">
                    <label class="form-check-label" for="Lunas">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="Belum Lunas" value="Belum Lunas">
                    <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary my-5 px-4" name="submit" id="liveToastBtn">Selesai</button>
            </div>
        </form>
    </div>
    <!-- content -->
</body>

</html>