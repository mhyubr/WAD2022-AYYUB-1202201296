@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 bg-light" style="height: 1080px;">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <br><br><br><br><br><br><br><br><br>
                        <h1>Login</h1>
                        <form action="" method="post">
                            <div class="mb-3 mt-5">
                                <label for="email" class="form-label">Email</label>
                                <input required type="email" class="form-control" name="email" id="email"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input required type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name='remember' id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" value='true'>Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary px-4 mt-4 mb-3" name="login">Login</button>
                            <br>
                            <span>Anda belum punya akun? <a href="register">Daftar</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
