@extends('layouts.app')
@section('content')
<div style="background: url('images/rosella.jpg'); height: 600px; background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center;">
<div class="panel panel-primary">
<div class="panel-heading">{{$berita->judul}}</div>
    <div class="panel-body">{!! $berita->isi !!}</div>
</div>
</div>
@endsection