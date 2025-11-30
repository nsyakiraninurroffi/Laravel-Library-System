<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku', 20)->unique();
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit')->nullable();
            $table->year('tahun');
            // foreign key ke tabel kategori
            $table->foreignId('id_kategori')->constrained('kategori')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
