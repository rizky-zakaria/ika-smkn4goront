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
            $table->increments('id');
            $table->string('nama', 255);
            $table->string('tgl_lahir', 255);
            $table->string('jk', 1);
            $table->string('pekerjaan', 255);
            $table->string('nomor_hp', 255);
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
