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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nama');
            $table->string('no_polisi');
            $table->date('tgl_boking');
            $table->unsignedbigInteger('id_service')->default(0);
            $table->foreign('id_service')->references('id')->on('services');
            $table->string('alamat')->default('-');
            $table->string('no_hp')->default('-');
            $table->unsignedbigInteger('id_barang')->nullable();
            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->integer('jumlah')->nullable();
            $table->unsignedbigInteger('id_montir')->nullable();
            $table->foreign('id_montir')->references('id')->on('montirs');
            // $table->integer('id_montir')->nullable();
            $table->integer('total')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
};
