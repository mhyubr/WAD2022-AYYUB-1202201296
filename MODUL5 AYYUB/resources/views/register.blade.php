@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 bg-light" style="height: 1080px;">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <br><br><br><br><br><br>
                        <h1>Register</h1>
                        <form action="" method="post">
                            <div class="mb-3 mt-5">
                                <label for="email" class="form-label">Email <span style="color: red;">*</span></label>
                                <input required type="email" class="form-control" name="email" id="email"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nomor" class="form-label">Nomor Handphone <span
                                        style="color: red;">*</span></label>
                                <input required type="number" class="form-control" name="nomor" id="nomor">
                            </div>
                            <div class="mb-3">
                                <label for="sandi" class="form-label">Kata Sandi <span
                                        style="color: red;">*</span></label>
                                <input required type="password" class="form-control" name="sandi" id="sandi">
                            </div>
                            <div class="mb-3">
                                <label for="konfir_sandi" class="form-label">Konfirmasi Kata Sandi <span
                                        style="color: red;">*</span></label>
                                <input required type="password" class="form-control" name="konfir_sandi" id="konfir_sandi">
                            </div>
                            <button type="submit" class="btn btn-primary px-4 mt-4 mb-3" name="daftar">Daftar</button>
                            <br>
                            <span>Anda sudah punya akun? <a href="Login-Ayyub.php">Login</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
