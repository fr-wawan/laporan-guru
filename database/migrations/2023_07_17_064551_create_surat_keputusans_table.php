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
    Schema::create('surat_keputusans', function (Blueprint $table) {
      $table->id();
      $table->string('no_sk')->nullable();
      $table->date('tahun');
      $table->enum('lembaga', ['ketua_yayasan', 'kepala_sekolah']);
      $table->enum('sumber_gaji', ['yayasan', 'sekolah']);
      $table->string('nama_ibu');
      $table->string('status_kawin');
      $table->bigInteger('nip_pasangan')->nullable();
      $table->bigInteger('no_kk')->nullable();
      $table->string('file_sk');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('surat_keputusans');
  }
};
