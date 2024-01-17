<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
     use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'roomType_id',
        'nama',
        'deskripsi',
        'hargaPerMalam',
        'kapasitas',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
