<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'booking_id',
        'room_id',
        'staff_id',
        'checkin',
        'checkout',
        'nama_tamu',
        'NIK',
        'no_phone',
    ];

    public function kamar()
    {
        return $this->hasMany(Kamar::class);
    }
}
