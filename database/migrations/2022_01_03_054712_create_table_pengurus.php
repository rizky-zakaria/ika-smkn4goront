<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pengurus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumni');
            $table->string('jabatan', 225);
            $table->string('periode', 255);
            $table->text('sambutan');
            $table->string('status', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pengurus');
    }
}
