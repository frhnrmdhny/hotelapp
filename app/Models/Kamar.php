<?php

namespace App\Models;

use App\Models\TipeKamar;
use App\Models\Fasilitas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kamar extends Model
{
   use HasFactory;
     /**
     * fillable
     *
     * @var array
     */

     // public $primaryKey = 'room_id';

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
}
