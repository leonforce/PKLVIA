@extends('layouts.app')
@section('content')
    <div>
        @if (session('alert-success'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                {{ session('alert-success')}}
            </div>
        @endif
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading text-center">Galeri</div>
            <div class="panel-body">
                <!-- Table -->
                @if (Auth::guest())
                @else
                    <div style="margin-bottom: 5px;">
                        Tambah Gambar
                        <form action="{{route('galeri.simpan')}}" method="post"id="galerifrom" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="file" name="link_gambar" id="link_gambar">
                            </div>
                            <div class="form-group"><input type="submit" value="Upload Gambar" name="submit">
                            </div>
                        </form></div>
                @endif
                <div class="row text-center">
                    @if (Auth::guest())
                        @foreach($galeri as $gal)
                            <div class="col-md-4"><img src="{{ URL::asset($gal->link_gambar) }}" width="100%">{{ date('j M Y g:i A', strtotime($gal->created_at)) }}</div>
                        @endforeach
                    @else
                    @foreach($galeri as $gal)
                <div class="col-md-4"><img src="{{ URL::asset($gal->link_gambar) }}" width="100%">{{ date('j M Y g:i A', strtotime($gal->created_at)) }}<form method="post" action="{{route('galeri.delete', $gal->id)}}" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?');" value="Delete">
                    </form></div>
                        @endforeach
                        @endif
        </div>
    </div>
@endsection