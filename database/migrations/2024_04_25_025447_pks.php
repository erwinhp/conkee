<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('pks', function (Blueprint $table) {
            $table->increments('id_pks');
            $table->string('agenda',15);
            $table->string('up3',30);
            $table->string('nama_langganan', 40);
            $table->string('nama_pemohon', 40);
            $table->string('no_hp', 20);
            $table->string('no_ktp', 30);
            $table->string('no_npwp', 30);
            $table->string('alamat', 80);
            $table->text('detil')->nullable();
            $table->string('jenis_permohonan', 150);
            $table->string('bank1', 10);
            $table->string('bank2', 10);
            $table->string('bank3', 10);
            $table->integer('timer_bank');
            $table->string('nomor_akun_bank',35);
            $table->string('bank_terpilih', 20);
            $table->string('jenis_rekening', 20);
            $table->string('nama_rekening', 20);
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nib')->nullable();
            $table->string('akta_perusahaan')->nullable();
            $table->string('surat_kuasa')->nullable();
            $table->string('status', 30)->default('baru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pks');
    }
};
