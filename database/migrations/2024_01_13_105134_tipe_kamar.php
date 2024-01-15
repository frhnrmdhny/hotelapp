<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tipe_kamars', function (Blueprint $table) {
            $table->id();
            $table->char('roomType_id', 8)->unique();
            $table->string('nama', 30)->notNull();
            $table->text('deskripsi')->notNull();
            $table->integer('hargaPerMalam')->notNull();
            $table->integer('kapasitas')->notNull();
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tipe_kamars');
    }
};
