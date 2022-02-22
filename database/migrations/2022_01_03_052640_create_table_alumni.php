<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlumni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alumni', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->string('nama', 255);
            $table->string('tgl_lahir', 255);
            $table->string('jk', 10);
            $table->string('pekerjaan', 255);
            $table->string('nomor_hp', 255);
            $table->string('foto', 255);
            $table->string('agama', 255);
            $table->string('tempat_lahir', 255);
            $table->text('alamat');
            $table->string('thn_angkatan', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_alumni');
    }
}
