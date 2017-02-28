@extends('layouts.app')
@section('content')
    <div class="content">
        <form action="{{route('galeri.simpan')}}" method="post"id="galerifrom" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"><input type="file" name="link_gambar" id="link_gambar">
            </div>
            <div class="form-group"><input type="submit" value="Upload Gambar" name="submit">
                </div>
        </form>
    </div>
@endsection