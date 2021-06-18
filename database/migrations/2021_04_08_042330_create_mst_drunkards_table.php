<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDrunkardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('mst_drunkards') === false){
            Schema::create('mst_drunkards', function (Blueprint $table) {
                $table->bigIncrements('drunkard_id');
                $table->string('name');
                $table->integer('level');
                $table->integer('hp');
                $table->integer('attack');
                $table->integer('move_speed');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_drunkards');
    }
}
