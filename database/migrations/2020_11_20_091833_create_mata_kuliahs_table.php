<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_prodi');
            $table->string('nm_prodi');
            $table->string('kode_matkul');
            $table->string('nm_matkul');
            $table->string('kelas');
            $table->string('nip');
            $table->string('nm_dosen');
            $table->string('semester_matkul');
            $table->string('sks');
            $table->string('semid');
            $table->string('jumlah_mahasiswa');
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
        Schema::dropIfExists('mata_kuliahs');
    }
}
