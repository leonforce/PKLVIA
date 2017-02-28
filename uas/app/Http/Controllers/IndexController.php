<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Benih;
class IndexController extends Controller
{
    public function index()
    {
        $berita = Berita::paginate(5);
        return view('home')->with('berita',$berita);
    }
    public function print1()
    {
        $benih = Benih::all();
        return view('print')->with('benih',$benih);
    }
}
