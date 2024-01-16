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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->char('staff_id', 8)->unique()->notNull();
            $table->char('namaDepan', 20)->notNull();
            $table->char('namaBelakang', 20)->notNull();
            $table->integer('gaji')->notNull();
            $table->date('ttl')->notNull();
            $table->char('no_phone', 13)->notNull();
            $table->char('email', 30)->nullable(); // Note: email is made nullable for flexibility
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
