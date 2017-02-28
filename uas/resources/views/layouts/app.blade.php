<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom-data-table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.dataTables.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
            
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" style=" font-weight: bold">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/benih') }}">Benih</a></li>
                        <li><a href="{{ url('/berita') }}">Berita</a></li>
                        <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
            </div>
            @yield('content')
    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.0.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/shCore.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/demo.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/ckeditor.js') }}"></script>
    <script type="text/javascript" language="javascript" class="init">



    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').dataTable( {
                "paging":   false,
                "ordering": false,
                "info":     false
            } );
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#beritaadmin').dataTable( {

            } );
        });
    </script>
    <script>
        CKEDITOR.replace( 'isi' );
    </script>
</body>
</html>
