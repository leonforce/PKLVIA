@extends('layouts.app')
@section('content')
<div class="content">
    <h1 class="text-center">Tambah Benih</h1>
    <form class="form-horizontal" action="{{route('benih.simpan')}}" method="post" id="benihfrom">
        {{csrf_field()}}
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama Tempat</label>
            <div class="col-sm-10">
                <input required type="text" name="NamaTempat" class="form-control" placeholder="NamaTempat">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
                <input required type="text" name="Alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Varietas</label>
            <div class="col-sm-10">
                <input required type="text" name="Varietas" class="form-control" placeholder="Varietas">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Kelas Benih</label>
            <div class="col-sm-10">
                <input required type="text" name="KelasBenih" class="form-control" placeholder="KelasBenih">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" name="Stok" class="form-control" placeholder="Stok">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" name="Keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="form-group text-center">
            <input class="btn btn-primary" type="submit" value="Simpan">
            <a href="{{route('benih')}}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection