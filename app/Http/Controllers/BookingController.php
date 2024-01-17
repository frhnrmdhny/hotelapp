<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Staff;
use App\Models\Booking;
use App\Models\TipeKamar;
use DB;

class BookingController extends Controller
{
    public function index(){
        return view('booking.index');
    }

    public function add()
    {
        $kamar = TipeKamar::latest()->get();
        // $room = Kamar::where('status', '=', 'tersedia')->get();
        $staff = Staff::latest()->get();

        

        return view('booking.addBooking', compact('kamar', 'staff'));
    }

    public function save(Request $request)
    {

        session(['booking_id' => $request->booking_id]);
        session(['staff_id' => $request->staff_id]);
        session(['tipe_kamar' => $request->tipeKamar]);

        return redirect()->route('form/booking/nextAdd');
    }

    public function nextAdd()
    {
        $booking_id = session('booking_id');
        $staff_id = session('staff_id');
        $tipe_kamar = session('tipe_kamar');

        // ... ambil data kamar berdasarkan tipe_kamar ...
        $kamar = Kamar::whereHas('tipeKamar', function ($query) use ($tipe_kamar){
            $query->where('nama', $tipe_kamar);
        })->where('status', 'tersedia')->get();
        return view('booking.saveAddBooking', compact('booking_id', 'staff_id', 'kamar'));
    }

    public function saveBooking(Request $request)
    {
        $booking = new Booking();
        $booking->booking_id = $request->booking_id;
        $booking->staff_id = $request->staff_id;
        $booking->room_id = $request->room_id;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->nama_tamu = $request->nama_tamu;
        $booking->NIK = $request->NIK;
        $booking->no_phone = $request->no_phone;
        $booking->save();

        return redirect()->route('form/booking/index');
    }   
}
