@extends('layouts.app')
@section('content')
<div style="background: url('images/rosella.jpg'); height: 600px; background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="jumbotron text-center" style="background: rgba(255,255,255, 0.8);">
  <h2>Balai Pengawasan Sertifikasi Benih Tanaman  Pangan Dan Hortikultura</h2>
  <h3>Provinsi Kalimantan Selatan</h3>
</div>
    @if (session('alert-warning'))
        <div class="alert alert-warning alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            {{ session('alert-warning')}}
        </div>
    @endif
<div class="panel panel-success text-center" style="min-height: 500px">
    <div class="panel-heading"><h4>Berita Balai Pengawasan Sertifikasi Benih Tanaman  Pangan Dan Hortikultura</h4></div>
    <div class="panel-body text-left">
    @foreach ($berita as $brt)
    <h3><a href="{{route('berita.show', $brt->id)}}">{{$brt->judul}}</a></h3>
    {!! $brt->isi !!}
    @endforeach
    </div>
</div>
</div>
@endsection
