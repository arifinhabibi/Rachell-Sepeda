<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sepeda',50);
            $table->string('harga_sepeda',14);
            $table->string('kategori',50);
            $table->string('deskripsi');
            $table->text('spesifikasi');
            $table->string('promo',50)->nullable();
            $table->string('kondisi',50)->nullable();
            $table->string('foto_sepeda',)->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
