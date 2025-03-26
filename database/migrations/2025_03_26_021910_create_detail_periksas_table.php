<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('detail_periksa', function (Blueprint $table) {
            $table->id();
            
            // Ubah nama tabel yang dirujuk menjadi 'periksas' sesuai dengan migrasi pertama
            $table->foreignId('id_periksa')->constrained('periksas')->onDelete('cascade');
            
            // Pastikan nama tabel untuk 'obat' sesuai dengan nama yang ada di database Anda
            $table->foreignId('id_obat')->constrained('obats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('detail_periksa');
    }
};
