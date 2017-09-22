<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('scores')) {
            Schema::create('scores', function(Blueprint $table) {
                $table->increments('id');
                $table->float('diligence', 4, 2);
                $table->float('midterm', 4, 2);
                $table->float('final', 4, 2);
                $table->float('avg', 4, 2);
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
        Schema::dropIfExists('scores');
    }
}
