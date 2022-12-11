@extends('layouts.main')

@section('container')
<div class="container">
        <br><br>
        <h2>Tambah Mobil</h2>
        <p class="text-muted">Tambah Mobil baru anda ke list show room</p>
        <br>
        <form action="{{ route('addcar.post') }}" enctype="multipart/form-data" method="POST">
            @csrf
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
                <button type="submit" class="btn btn-primary my-5 px-4" name="submit" id="liveToastBtn" value="1">Selesai</button>
            </div>
        </form>
    </div>
@endsection