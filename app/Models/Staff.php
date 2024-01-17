<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // public $primaryKey = 'staff_id';

    protected $fillable = ['staff_id', 'namaDepan','namaBelakang', 'gaji', 'ttl', 'no_phone', 'email'];

    // public function booking()
    // {
    //     return $this->belongsTo(Booking::class);
    // }
}
