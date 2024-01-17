<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\BookingObserver;
use Carbon\Carbon;

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
        'status',
    ];

    public function kamar()
    {
        return $this->hasMany(Kamar::class);
    }

    //  public static function checkAndExpireBookings()
    // {
    //     // Mengambil kamar dan mengubah statusnya menjadi 'terpakai'
    //     $kamar = Kamar::find($booking->room_id);
    //     $kamar->setRoomStatusUsed();
    // }
}
