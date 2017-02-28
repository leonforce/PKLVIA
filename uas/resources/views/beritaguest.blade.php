@extends('layouts.app')
@section('content')

    <div style="background: url({{ URL::asset('images/Rosella.jpg') }}); height: 600px; background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center;">
        @if (session('alert-success'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                {{ session('alert-success')}}
            </div>
        @endif
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading text-center">Daftar Berita
            <div class="panel-body">
                <table id="example" class="table" width="100%">
                <thead>
                <tr>
                    <th class="text-center">
                        Judul
                    </th>
                    <th class="text-center">
                        Isi
                    </th>
                </tr>
                </thead>
                    <tbody class="text-center">
                    @foreach ($berita as $brt)
                        <tr>
                            <td>
                                <a href="{{route('berita.show', $brt->id)}}">{{$brt->judul}}</a>

                            </td>
                            <td>
                                {!! $brt->isi !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            </div>
@endsection
