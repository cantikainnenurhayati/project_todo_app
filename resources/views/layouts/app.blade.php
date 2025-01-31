<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    <!-- Import bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
</head>

<body>
    {{-- jadi include digunakan untuk mengambil fungsi fungsi component yg ada di dlam folder partials/navbar --}}
    @include('partials.navbar') <!-- Mengambil component navbar --> 
{{-- yield digunakan untuk mendifinisikan tempat(section) di dalam sebuah layouts --}}
    @yield('content') <!-- Render content -->
{{-- jadi include digunakan untuk mengambil fungsi fungsi component yg ada di dlam folder partials/modal--}}
    @include('partials.modal')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- Import bootstrap JS -->
</body>

</html>
