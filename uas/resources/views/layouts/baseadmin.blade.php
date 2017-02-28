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
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
        <div>
        <div class="panel panel-default text-center"><h3>Halaman Admin</h2></div>       
        </div>
        <div class="col-sm-2 text-center" style="background-color: white; height: 760px;">
        <ul class="nav nav-pills nav-stacked">
        <li><a href="#">Home</a></li>
        <li><a href="#">Benih</a></li>
        <li><a href="#">Berita</a></li>
        </ul>
        </div>
        <div class="col-sm-10">@yield('content')</div>
    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
