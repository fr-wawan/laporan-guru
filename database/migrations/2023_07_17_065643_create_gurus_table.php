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
    Schema::create('gurus', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->enum('jenis_kelamin', ['pria', 'wanita']);
      $table->bigInteger('nik')->unique();
      $table->bigInteger('npwp');
      $table->bigInteger('nuptk');
      $table->string('tempat_lahir');
      $table->date('tanggal_lahir');
      $table->enum('status', ['guru_honor', 'yayasan']);
      $table->enum('jenis_ptk', ['guru_mapel', 'guru_bk']);
      $table->string('agama');
      $table->text('alamat');
      $table->string('email')->nullable();
      $table->text('tugas_tambahan')->nullable();
      $table->unsignedBigInteger('surat_keputusan_id');
      $table->string('password');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('gurus');
  }
};
