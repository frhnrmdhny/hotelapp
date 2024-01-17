<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipeKamar;
use App\Models\Fasilitas;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'roomType_id',
    ];

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'roomType_id', 'roomType_id');
    }

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_kamar','room_id', 'facility_id' );
    }

     public function setRoomStatusUsed()
    {
        $this->update(['status' => 'terpakai']);
    }
}

