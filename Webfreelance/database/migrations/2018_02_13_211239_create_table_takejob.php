<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTakejob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takejob', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_work');
            $table->integer('id_nguoinhan');
            $table->text('content');
            $table->string('tghoanthanh');
            $table->string('tailieu');
            $table->string('phone');
            $table->string('skype');
            $table->float('money');
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
        Schema::dropIfExists('takejob');
    }
}
