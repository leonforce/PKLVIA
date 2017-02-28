<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Benih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benih', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NamaTempat');
            $table->string('Alamat');
            $table->string('Varietas');
            $table->string('KelasBenih');
            $table->string('Stok');
            $table->string('Keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benih');
    }
}
