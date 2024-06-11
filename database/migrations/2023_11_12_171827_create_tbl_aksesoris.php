<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksesoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto')->nullable('null');
            $table->string('nama');
            $table->integer('ukuran');
            $table->string('satuan');
            $table->string('warna');
            $table->integer('stok');
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
        Schema::dropIfExists('aksesoris');
    }
};
