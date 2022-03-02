<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&family=Russo+One&display=swap" rel="stylesheet">

    {{-- custom sidebar --}}
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}"> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">

    <title>Admin</title>
</head>
<body id="page-top" style="background-color:#5b7d87">
    @yield('konten1')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
