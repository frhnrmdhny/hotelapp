<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use DB;
class FasilitasController extends Controller
{
    public function index(){
        $fasilitas = Fasilitas::latest()->get();
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function add(){
        return view('fasilitas.addFasilitas');
    }

    public function save(Request $request)
    {
        $fasilitas = new Fasilitas();

        $fasilitas->facility_id = $request->facility_id;
        $fasilitas->nama        = $request->nama;
        $fasilitas->deskripsi   = $request->deskripsi;
        $fasilitas->save();

        return redirect()->route('form/fasilitas/index');
    }

}
