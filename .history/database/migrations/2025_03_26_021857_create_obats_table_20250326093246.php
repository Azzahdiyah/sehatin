<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('obats', function (Blueprint $table) {
            $table->id(); // Secara default ini adalah unsignedBigInteger
            $table->string('nama_obat', 50);
            $table->string('kemasan', 35);
            $table->decimal('harga', 12, 2); // Gunakan decimal jika ingin menyimpan harga dengan desimal
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('obats'); // Perbaikan nama tabel
    }
};
