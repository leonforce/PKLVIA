@extends('layouts.app')
@section('content')
<div style="background: url('images/rosella.jpg'); height: 600px; background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center;">
    @if (session('alert-success'))
<div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    {{ session('alert-success')}}
</div>
@endif
<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Daftar Benih</div>
  <div class="panel-body">
  <!-- Table -->
      @if (Auth::guest())
          @else
  <div style="margin-bottom: 5px;">
      <a href="{{route('benih.index')}}" class="btn btn-success">Tambah</a>
      <a class="btn btn-primary" href="{{route('print1')}}">Cetak</a>
  </div>
                @endif
                    @if (Auth::guest())
          <table id="example" class="table" width="100%">
                            <thead>
                        <tr style="font-weight: bold;background-color: lightgreen;">
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
                    @else
                                <table id="beritaadmin" class="table" width="100%">
                        <thead>
                    <tr style="font-weight: bold;background-color: lightgreen;">
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
                        <th>
                            Aksi
                        </th>
                    </tr>
                        </thead>
                    @endif
                    @foreach ($benih as $bnh)
                    @if (Auth::guest())
                    <tbody><tr>
                        <td>
                            {{ $bnh->NamaTempat}}

                        </td>
                        <td>
                            {{ $bnh->Alamat}}
                        </td>
                        <td>
                            {{ $bnh->Varietas}}
                        </td>
                        <td>
                            <a href="{{route('benih.show', $bnh->KelasBenih)}}">{{ $bnh->KelasBenih}}</a>
                        </td>
                        <td>
                            {{ $bnh->Stok}}
                        </td>
                        <td>
                            {{ $bnh->Keterangan}}
                        </td>
                    </tr></tbody>
                    @else
                    <tbody><tr>
                        <td>
                            <a href="{{route('benih.show2', $bnh->NamaTempat)}}">{{ $bnh->NamaTempat}}</a>

                        </td>
                        <td>
                            {{ $bnh->Alamat}}
                        </td>
                        <td>
                            {{ $bnh->Varietas}}
                        </td>
                        <td>
                            <a href="{{route('benih.show', $bnh->KelasBenih)}}">{{ $bnh->KelasBenih}}</a>
                        </td>
                        <td>
                            {{ $bnh->Stok}}
                        </td>
                        <td>
                            {{ $bnh->Keterangan}}
                        </td>
                        <td>
                             <form method="post" action="{{route('benih.delete', $bnh->id)}}" accept-charset="UTF-8">
                                 <input type="hidden" name="_method" value="DELETE">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <a class="btn btn-primary" href="{{route('benih.edit', $bnh->id)}}">Edit</a>
                                 <input type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?');" value="Delete">
                             </form>
                        </td>
                    </tr></tbody>
                    @endif
                    @endforeach
                </table>
</div>
</div>
</div>
@endsection