@extends('layouts.app')
@section('content')

<div style="background: url('images/Rosella.jpg'); height: 600px; background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center;">
    @if (session('alert-success'))
<div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    {{ session('alert-success')}}
</div>
@endif
<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Daftar Berita</div>
  <div class="panel-body">
  <!-- Table -->
  <div style="margin-bottom: 5px;"><a href="{{route('berita.index')}}" class="btn btn-success">Tambah</a></div>
      <table id="beritaadmin" class="table" width="100%">
          <thead>
          <tr style="font-weight: bold;background-color: lightgreen;">
                        <th>
                            Judul
                        </th>
                        <th>
                            Isi
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
          </thead>
                    @foreach ($berita as $bnh)

                    <tr>
                        <td>
                            {{ $bnh->judul}}

                        </td>
                        <td>
                            {!! $bnh->isi !!}
                        </td>
                        <td>
                             <form method="post" action="{{route('berita.delete', $bnh->id)}}" accept-charset="UTF-8">
                                 <input type="hidden" name="_method" value="DELETE">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <a class="btn btn-primary" href="{{route('berita.edit', $bnh->id)}}">Edit</a>
                                 <input type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?');" value="Delete">
                             </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
</div>
</div>
</div>
@endsection
