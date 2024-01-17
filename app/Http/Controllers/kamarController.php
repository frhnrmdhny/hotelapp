<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class kamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::latest()->get();
        return view('admin.room.room', compact('kamar'));
    }

    public function addKamar()
    {
        $dataKamar = DB::table('tipe_kamars')->get();
        $fasilitas = DB::table('fasilitas')->get();
        return view('admin.room.addRoom', compact('dataKamar', 'fasilitas'));
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

        return redirect()->route('form/kamar/index');
    }

    // public function edit()

    public function dataKamar()
    {   
        $kamar = Kamar::latest()->get();
        
        $fasilitas = DB::table('fasilitas')->get();
       

        return view('admin.room.dataRoom', compact('kamar', 'fasilitas'));
    }
}
