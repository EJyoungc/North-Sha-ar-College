<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>North Sha’ar College of Education</title>

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
    <link rel="stylesheet" href="{{ asset('dash/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/plugins/trix/trix.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">


    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @livewire('nav.livewire-top')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @livewire('nav.livewire-left')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{ $slot }}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="#">North Sha’ar College of Education</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    <x-livewire-alert::scripts />
    <!-- jQuery -->
    <script src="{{ asset('dash/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->

    @yield('chart')
    <script src="{{ asset('dash/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dash/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('dash/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        document.addEventListener('livewire:initialized', function() {
            
            
            let wire  = window.Livewire.all();

            // console.log(wire[2].$wire.get('tag'));
            
            $('#select2').select2({
                theme: 'bootstrap4',
            }).on('change', function() {
                // $wire.set('tag',$(this).val())
                
                // $wire.name =  $(this).val();
                    
                wire[2].$wire.set('tag',$(this).val());
                
            });

        });


        // let wire = window.Livewire.all();

        
        // console.log(wire.tag = );

    </script>
    
  
   

    
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('dash/dist/js/demo.js"></script> --}}

</body>

</html>
