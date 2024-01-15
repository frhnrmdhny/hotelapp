<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class kamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::latest()->get();
        return view('kamar.index', compact('kamar'));

    }

    public function addKamar()
    {
        $dataKamar = DB::table('tipe_kamars')->get();
        $fasilitas = DB::table('fasilitas')->get();
        return view('kamar.addKamar', compact('dataKamar', 'fasilitas'));
    }

    public function saveKamar(Request $request)
    {
         $request->validate([
            'room_id'       => 'required|string',
            'roomType_id'     => 'required|string',
        ]);
         $data = request()->all();
         $rooms = new Kamar();

         $rooms->room_id = $data['room_id'];
         $rooms->roomType_id = $data['roomType_id'];
         $rooms->save();

         $id = $data['room_id'];
         $fasilitas =  $data['facility_id'];
         $rooms->fasilitas()->attach($fasilitas, ['room_id' => $id]);

         return redirect()->route('form/kamar/add');
    }

    // public function edit()
}
