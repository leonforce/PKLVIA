<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inventaris Barang</title>

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
<div class="container-fluid">
    <div class="row text-center">
        <h2>Balai Pengawasan Sertifikasi Benih Tanaman Pangan Dan Hortikultura</h2>
        <h3>Provinsi Kalimantan Selatan</h3>
    </div>
    <br/>
    <div class="row">
        <table class="table table-bordered">
            <thead class="bg-primary">
            <tr><th>
                    ID
                </th>
                <th>
                    Nama Tempat
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    Jenis/Varietas
                </th>
                <th>
                    Kelas Benih
                </th>
                <th>
                    Stok(kg)
                </th>
                <th>
                    Keterangan
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($benih as $br)
                <tr>
                    <th>{{$br->id}}</th>
                    <th>{{$br->NamaTempat}}</th>
                    <th>{{$br->Alamat}}</th>
                    <th>{{$br->Varietas}}</th>
                    <th>{{$br->KelasBenih}}</th>
                    <th>{{$br->Stok}}</th>
                    <th>{{$br->Keterangan}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        <a href="#" class="btn btn-primary hidden-print" onclick="myFunction()">Cetak</a>
        <script>
            function myFunction() {
                window.print();
            }
        </script>
    </div>
</div>
</body>
</html>