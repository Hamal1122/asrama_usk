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
        Schema::create('gedung', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori_gedung',['laki-laki','perempuan',]);
<<<<<<< HEAD
=======
            $table->integer('kapasitas');
>>>>>>> 1243f048fe72ba87c6bbcf8c2f38eeb13333e4ce
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gedung');
    }
};
