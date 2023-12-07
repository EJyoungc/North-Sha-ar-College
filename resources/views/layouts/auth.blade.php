<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    @livewireStyles
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/plugins/trix/trix.min.css') }}">

</head>

<body class="">


    @yield('content')


    @livewireScripts
    <!-- jQuery -->
    <script src="{{ asset('dash/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('dash/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dash/dist/js/adminlte.min.js') }}"></script>
    
   


</body>

</html>
