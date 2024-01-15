<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $primaryKey = 'facility_id';

     protected $fillable = [
        'facility_id',
        'nama',
        'deskripsi'
    ];

    public function kamar()
    {
        return $this->belongsToMany(Kamar::class, 'fasilitas_kamar', 'facility_id', 'room_id');
    }
}
