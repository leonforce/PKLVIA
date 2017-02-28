@extends('layouts.app')
@section('content')
<div class="content">
    <h1 class="text-center">Edit Benih</h1>
                <form class="form-horizontal" action="{{route('benih.update', $benih->id)}}" method="post" id="benihfrom">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Tempat</label><div class="col-sm-10">
                        <input type="text" value="{{$benih->NamaTempat}}" name="NamaTempat" class="form-control" placeholder="NamaTempat"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label><div class="col-sm-10">
                        <input type="text" value="{{$benih->Alamat}}" name="Alamat" class="form-control" placeholder="Alamat"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Varietas</label><div class="col-sm-10">
                        <input type="text" value="{{$benih->Varietas}}" name="Varietas" class="form-control" placeholder="Varietas"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas Benih</label><div class="col-sm-10">
                            <input type="text" value="{{$benih->KelasBenih}}" name="KelasBenih" class="form-control" placeholder="KelasBenih"></div>                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Stok</label><div class="col-sm-10">
                        <input type="text" value="{{$benih->Stok}}" name="Stok" class="form-control" placeholder="Stok"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Keterangan</label><div class="col-sm-10">
                        <input type="text" value="{{$benih->Keterangan}}" name="Keterangan" class="form-control" placeholder="Keterangan"></div>
                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-primary" type="submit" value="Update">
                        <a href="{{route('benih')}}" class="btn btn-danger">Cancel</a>
                    </div>

</form>
</div>
@endsection