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
        Schema::create('kamars', function (Blueprint $table) {
            $table->char('room_id', 8)->primary();
            $table->char('roomType_id', 8)->notNull();
            $table->foreign('roomType_id')->references('roomType_id')->on('tipe_kamars')->onDelete('cascade');
            $table->enum('status', ['tersedia', 'terpakai'])->default('tersedia');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
