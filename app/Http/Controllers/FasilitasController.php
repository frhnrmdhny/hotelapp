<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\DB;
class FasilitasController extends Controller
{
    public function index(){
        $fasilitas = DB::table('fasilitas')->get();
        return view('admin.facilityRoom.facility', compact('fasilitas'));
    }

    public function add(){
        return view('admin.facilityRoom.addFacility');
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

    public function edit($nama)
    {
        $fasilitas = DB::table('fasilitas')->where('nama', $nama)->first();
        return view('admin.facilityRoom.editFacilityData', compact('fasilitas'));
    }

    public function saveEdit(Request $request)
    {
        $update = [
            'facility_id' => $request->facility_id,
            'nama'  => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        Fasilitas::where('nama', $request->nama)->update($update);
        return redirect()->route('form/fasilitas/index');
    }

    public function delete(Request $request)
    {
        DB::table('fasilitas')->where('facility_id', '=', $request->facility_id)->delete();

        return redirect()->back();
    }

}
