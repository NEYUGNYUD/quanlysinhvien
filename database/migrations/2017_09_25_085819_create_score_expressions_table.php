<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreExpressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('score_expressions')) {
            Schema::create('score_expressions', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('diligence');
                $table->integer('midterm');
                $table->integer('final');
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
        Schema::dropIfExists('score_expressions');
    }
}
