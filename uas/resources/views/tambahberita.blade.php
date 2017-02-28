@extends('layouts.app')
@section('content')
<div class="content" style="margin-top: 20px">
                <form action="{{route('berita.simpan')}}" method="post" id="benihfrom">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="judul" class="form-control" placeholder="Judul Berita">
            
                    </div>
                    <div class="form-group">
                    <textarea id="isi" name="isi" class="form-control">
                    </textarea>    
                    </div>
                    <div class="form-group">
                        <input type="submit" value="simpan">
                    </div>

</form>
</div>
@endsection