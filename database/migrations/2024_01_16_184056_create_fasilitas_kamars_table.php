<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fasilitas_kamar', function (Blueprint $table) {
            $table->char('facility_id', 8);
           $table->char('room_id', 8);
            $table->foreign('facility_id')->references('facility_id')->on('fasilitas')->onDelete('cascade');
           $table->foreign('room_id')->references('room_id')->on('kamars')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_kamar');
    }
};
