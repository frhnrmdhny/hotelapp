<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeKamar;
use DB;

class tipeKamarController extends Controller
{
    public function index()
    {
        $tipeKamar = DB::table('tipe_kamars')->get();
        return view('tipekamar.index', compact('tipeKamar'));
    }

    public function add(){
        return view('tipekamar.tipeKamarAdd');
    }

    public function saveTipeKamar(Request $request)
    {
        $kamar = new TipeKamar();

        $kamar->roomType_id = $request->roomType_id;
        $kamar->nama        = $request->nama;
        $kamar->hargaPerMalam= $request->hargaPerMalam;
        $kamar->kapasitas   = $request->kapasitas;
        $kamar->deskripsi   = $request->deskripsi;
        $kamar->save();

        return redirect()->route('form/tpKamar/index');
    }
}
