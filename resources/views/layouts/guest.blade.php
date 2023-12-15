<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=65086443f8a3010019f0cd3a&product=sop&source=platform" async="async"></script>
    
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=65086443f8a3010019f0cd3a&product=inline-share-buttons' async='async'></script>
    <!-- Default stylesheets-->
    <link href="{{ asset('root/assets/lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/flexslider/flexslider.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset('root/assets/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{ asset('root/assets/css/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{ asset('root/assets/css/colors/default.css')}}" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-0958fbe4.css') }}">
        <script src="{{ asset('build/assets/app-dbe23e4c.js') }}"></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class=" antialiased">
        @livewire('nav.root-top-livewire')

        {{ $slot }}
    </div>

    @livewireScripts

    <script src="{{ asset('root/assets/lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{ asset('root/assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('root/assets/lib/wow/dist/wow.js')}}"></script>
    <script src="{{ asset('root/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{ asset('root/assets/lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{ asset('root/assets/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{ asset('root/assets/lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{ asset('root/assets/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('root/assets/lib/smoothscroll.js')}}"></script>
    <script src="{{ asset('root/assets/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('root/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{ asset('root/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('root/assets/js/main.js')}}"></script>


</body>

</html>
