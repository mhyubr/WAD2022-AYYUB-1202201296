@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-5 my-auto">
                <br><br><br><br>
                <h1 class="text-center" style="font-size: 70px;">Selamat Datang Di Show Room Ayyub</h1>
                <p class="text-muted " style="font-size: 20px; margin-left: 90px;">At lacus vitae nulla sagittis scelerisque
                    nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
                <a class="btn btn-primary py-2 px-5 mt-5" style="font-size: 20px; margin-left: 90px;"
                    href="list" role="button">MyCar</a>
                <br><br><br><br>
                <img src="{{ asset('asset/img/logo-ead.png') }}" style="margin-left: 90px;" alt="" srcset="">
                <span class="text-muted ms-5">Ayyub_1202201296</span>
            </div>
            <div class="col-sm-5 mt-5 pt-5 ps-5">
                <img class="mt-5 ms-5" src="{{ asset('asset/img/home-car.png') }}" alt="" srcset="">
            </div>
        </div>
    </div>
@endsection
