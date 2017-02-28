@extends('layouts.app')
@section('content')
<div class="content">
                <form action="{{route('berita.update', $berita->id)}}" method="post" id="benihfrom">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" value="{{$berita->judul}}" name="judul" class="form-control" placeholder="Judul Berita">
            
                    </div>
                    <div class="form-group">
                    <textarea name="isi" class="form-control" placeholder="Isi Berita">
                        {{$berita->isi}}
                    </textarea>    
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update">
                    </div>

</form>
</div>
@endsection