<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul', 255);
            $table->string('teruntuk', 255);
            $table->string('tgl_agenda', 255);
            $table->text('isi');
            $table->string('tempat_agenda', 255);
            $table->string('waktu_post', 255);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_agenda');
    }
}
