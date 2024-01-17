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
        Schema::create('bookings', function (Blueprint $table) {
            $table->char('booking_id', 8)->primary();

            $table->char('room_id', 8)->notNull();
            $table->foreign('room_id')->references('room_id')->on('kamars')->onDelete('cascade');
            $table->char('staff_id', 8)->notNull();
            $table->foreign('staff_id')->references('staff_id')->on('staff')->onDelete('cascade');
            $table->dateTime('checkin')->notNull();
            $table->dateTime('checkout')->notNull();
            $table->char('nama_tamu', 30)->notNull();
            $table->char('NIK', 16)->notNull();
            $table->char('no_phone', 13)->notNull();
            $table->enum('status', ['expired', 'active', ])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
