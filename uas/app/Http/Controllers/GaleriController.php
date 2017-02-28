<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri')->with('galeri', $galeri);
    }

    public function tambah()
    {
        return view('tambahgaleri');
    }
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('link_gambar'))
        {
            $link_save3 = 'images/';
            $berkas3 = $request->file('link_gambar')->getClientOriginalName();
            $request->file('link_gambar')->move($link_save3, $berkas3);
            $input['link_gambar'] = $link_save3.$berkas3;
        }
        else
        {
            $input['link_gambar'] = '';
        }

        // dd($input);


        try
        {
            Galeri ::create($input);

        } catch (QueryException $e) {
            return redirect()->back()->with('gagal', 'Pendaftaran yang anda masukkan sudah ada dalam database.');
        }
        return redirect()->route('galeri')->with('alert-success','Berhasil Menyimpan!!');
    }

    public function delete($id)
    {
        $galeri = galeri::find($id);
        $galeri->delete();
        return redirect()->route('galeri')->with('alert-success','data berhasil diHapus');
    }
}
