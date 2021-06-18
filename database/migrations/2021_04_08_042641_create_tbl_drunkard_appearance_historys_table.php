<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDrunkardAppearanceHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('tbl_drunkard_appearance_historys') === false){
            Schema::create('tbl_drunkard_appearance_historys', function (Blueprint $table) {
                $table->bigIncrements('drunkard_id');
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
        Schema::dropIfExists('tbl_drunkard_appearance_historys');
    }
}
