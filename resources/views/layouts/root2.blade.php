<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>North Sha’ar College of Education</title>
    <meta name="description" content="North Sha’arNorth Sha’ar College of Education">
    <meta name="keywords" content="college">
    @livewireStyles
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body>

    <div class="probootstrap-search" id="probootstrap-search">
        <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
        <form action="#">
            <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
        </form>
    </div>

    <div class="probootstrap-page-wrapper">
        {{-- @livewire('public.include.nav-top-liverwire') --}}
        @livewire('public.include.nav-top-livewire')

        @yield('content')

        @livewire('public.include.nav-bottom-livewire')
    </div>
    @livewireScripts

    {{-- <script src="{{ asset('dash/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('dash/plugins/bootstrap/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/scripts.min.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
