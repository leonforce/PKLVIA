<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Benih;

class BenihController extends Controller
{
    
    public function index()
    {
    	$benih = Benih::all();
    	return view('benih')->with('benih', $benih);
    }

    public function tambah()
    {
        return view('tambahbenih'); 
    }
    public function edit($id)
    {
        $benih = Benih::find($id);
        return view('editbenih')->with('benih', $benih); 
    }
    public function show($id)
    {
        $benih = Benih::where('KelasBenih', $id)->get();
        return view('benih')->with('benih', $benih);
    }
    public function show2($id)
    {
        $benih = Benih::where('NamaTempat', $id)->get();
        return view('benih')->with('benih', $benih);
    }
    public function store(Request $request)
    {
        $benih = new Benih();
        $benih->NamaTempat = $request->NamaTempat;
        $benih->Alamat = $request->Alamat;
        $benih->Varietas = $request->Varietas;
        $benih->KelasBenih = $request->KelasBenih;
        $benih->Stok = $request->Stok;
        $benih->Keterangan = $request->Keterangan;
        $benih->save();
        return redirect()->route('benih')->with('alert-success','data berhasil disimpan'); 
    }
    public function update(Request $request, $id)
    {
        $benih = Benih::find($id);
        $benih->NamaTempat = $request->NamaTempat;
        $benih->Alamat = $request->Alamat;
        $benih->Varietas = $request->Varietas;
        $benih->KelasBenih = $request->KelasBenih;
        $benih->Stok = $request->Stok;
        $benih->Keterangan = $request->Keterangan;
        $benih->save();
        return redirect()->route('benih')->with('alert-success','data berhasil diUpdate'); 
    }
    public function delete($id)
    {
        $benih = Benih::find($id);
        $benih->delete();
        return redirect()->route('benih')->with('alert-success','data berhasil diHapus'); 
    }
}
