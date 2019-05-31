<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengeluaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('debet')->default(0);
            $table->integer('kredit')->default(0);
            $table->integer('saldo')->default(0);
            $table->string('keterangan', 65)->nullable();
            $table->date('tanggal');
            $table->string('create_user', 65);
            $table->string('update_user', 65)->nullable();
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
        Schema::dropIfExists('tb_pengeluaran');
    }
}
