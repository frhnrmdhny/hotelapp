<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use DB;

class StaffController extends Controller
{
    public function index()
    {
        $staff = DB::table('staff')->get();

        return view('staff.index', compact('staff'));
    }

    public function add(){
        return view('staff.addStaff');
    }

    public function save(Request $request)
    {
        $staff = new Staff();

        $staff->staff_id         = $request->staff_id;
        $staff->namaDepan        = $request->namaDepan;
        $staff->namaBelakang     = $request->namaBelakang;
        $staff->gaji             = $request->gaji   ;
        $staff->ttl              = $request->ttl;
        $staff->no_phone         = $request->no_phone   ;
        $staff->email            = $request->email;
        $staff->save();

        return redirect()->route('form/staff/index');
    }

    public function edit($staff_id)
    {
        $staff = DB::table('staff')->where('staff_id', $staff_id)->first();
        return view('staff.editStaff', compact('staff'));
    }

    public function saveEdit(Request $request)
    {
        $update = [
            'staff_id' => $request->staff_id,
            'namaDepan' => $request->namaDepan,
            'namaBelakang' => $request->namaBelakang,
            'gaji' => $request->gaji,
            'ttl' => $request->ttl,
            'no_phone' => $request->no_phone,
            'no_phone' => $request->staff_id,
        ];
        Staff::where('staff_id', $request->staff_id)->update($update);
        return redirect()->route('form/staff/index');
    }
}
