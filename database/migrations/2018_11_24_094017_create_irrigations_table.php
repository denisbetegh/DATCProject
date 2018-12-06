<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrrigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irrigations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('temp1');
            $table->integer('humi1');
            $table->integer('temp2');
            $table->integer('humi2');
            $table->integer('temp3');
            $table->integer('humi3');
            $table->integer('temp4');
            $table->integer('humi4');
            $table->integer('temp5');
            $table->integer('humi5');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
/*             $table->timestamps(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('irrigations');
    }
}
