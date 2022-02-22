<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKomentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_komentar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 255);
            $table->string('email', 255);
            $table->string('company_name', 255);
            $table->string('subjek', 255);
            $table->text('komentar');
            $table->string('waktu_post', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_komentar');
    }
}
