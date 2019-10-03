<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->string('name', 64);
            $table->string('address', 128);
            $table->unsignedTinyInteger('consent');
            $table->unsignedTinyInteger('seat');
            $table->unsignedTinyInteger('wifi');
            $table->time('open');
            $table->time('close');
            $table->unsignedTinyInteger('restday');
            $table->boolean('credit');
            $table->string('addtext',5000)->nullable();
            $table->tinyIncrements('id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes');
    }
}

// down 作ったテーブルを消す