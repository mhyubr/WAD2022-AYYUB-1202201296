@extends('layouts.main')

@section('container')
    <div class="container">
        <br><br>
        <h2>My Show Room</h2>
        <p class="text-muted">List Show Room Ayyub - 1202201296</p>
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            @foreach ($showroom as $show)
                <!-- card -->
                <div class="card mx-5 my-4" style="width: 18rem;">
                    <img src="{{ asset('storage/asset/img/upload/' . $show->image) }}" class="card-img-top" alt="{{ $show->image }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $show->name }}</h5>
                        <p class="card-text">{{ $show->description }}</p>
                        <div class="text-center mt-3">
                            <a href="#"class="btn btn-primary mx-2 px-4 rounded-pill" name="detail">Detail</a>
                            <a href="#" class="btn btn-danger mx-2 px-4 rounded-pill">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- card -->
            @endforeach
            <div class="mx-3">
                <p>Jumlah Mobil : {{ count($showroom) }}</p>
            </div>
        </div>
    </div>
@endsection
