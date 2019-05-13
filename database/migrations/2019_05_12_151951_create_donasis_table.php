<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_donasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_donatur')->default('1');
            $table->string('donatur', 65)->nullable();
            $table->integer('nominal');
            $table->date('tanggal');
            $table->string('create_user', 65);
            $table->softDeletes();
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
        Schema::dropIfExists('tb_donasi');
    }
}
