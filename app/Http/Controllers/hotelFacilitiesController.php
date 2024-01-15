<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotelFacilitiesModel;
use DB;

class hotelFacilitiesController extends Controller
{
    //index Page
    public function index(){
        $fasilitas = DB::table('hotel_facilities')->get();
        return view('fasilitas.index', compact('fasilitas'));
    }
}
