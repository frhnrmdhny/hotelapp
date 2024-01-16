<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeKamar;
use Illuminate\Support\Facades\DB;

class tipeKamarController extends Controller
{
    public function index()
    {
        $tipeKamar = DB::table('tipe_kamars')->get();
        return view('admin.typeRoom.typeRoom', compact('tipeKamar'));
    }

    public function add(){
        return view('admin.typeRoom.addTypeRoom');
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

    public function edit($roomType_id)
    {
        $tpKamar = DB::table('tipe_kamars')->where('roomType_id', $roomType_id)->first();
        return view('admin.typeRoom.editTypeRoom', compact('tpKamar'));
    }

    public function saveEdit(Request $request)
    {
        $update = [
            'roomType_id' => $request->roomType_id,
            'nama' => $request->nama,
            'hargaPerMalam' => $request->hargaPerMalam,
            'kapasitas' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
        ];
        TipeKamar::where('roomType_id', $request->roomType_id)->update($update);
        return redirect()->route('form/tpKamar/index');
    }

    public function delete(Request $request)
    {
        DB::table('tipe_kamars')->where('roomType_id','=', $request->roomType_id)->delete();
        // TipeKamar::destroy($request->roomType_id);
        return redirect()->back();
    }
}
