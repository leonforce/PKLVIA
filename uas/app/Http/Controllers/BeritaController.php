<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        if (Auth::guest())
        {
            $berita = Berita::all();
            return view('beritaguest')->with('berita', $berita);
        }
        else
        {
            $berita = Berita::all();
            return view('berita')->with('berita', $berita);
        }

    }

    public function tambah()
    {
        if (Auth::guest())
        {
            return redirect()->route('home')->with('alert-warning','Anda Tidak Dapat Mengakses halaman Ini');
        }
        else
        {
            return view('tambahberita');
        }
    }
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('editberita')->with('berita', $berita); 
    }
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('showberita')->with('berita', $berita); 
    }
    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();
        return redirect()->route('berita')->with('alert-success','data berhasil disimpan'); 
    }
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();
        return redirect()->route('berita')->with('alert-success','data berhasil diUpdate'); 
    }
    public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('berita')->with('alert-success','data berhasil diHapus'); 
    }
}
