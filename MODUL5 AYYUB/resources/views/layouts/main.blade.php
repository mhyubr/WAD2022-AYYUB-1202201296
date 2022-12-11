<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('asset/img/logo-ead.png') }}" type="image/x-icon">
    <script src="{{ asset('asset/js/bootstrap.js') }}"></script>
    <title>Show Room Ayyub | {{ $title }}</title>
</head>

<body>
   
    @include('layouts.navbar')

    @yield('container')

</body>

</html>