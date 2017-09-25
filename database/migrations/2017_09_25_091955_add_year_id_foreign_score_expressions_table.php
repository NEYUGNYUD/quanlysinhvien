<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddYearIdForeignScoreExpressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('score_expressions', 'year_id')) {
            Schema::table('score_expressions', function(Blueprint $table) {
                $table->integer('year_id')->unsigned();
                $table->foreign('year_id')->references('id')->on('years');
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
        Schema::table('scores', function(Blueprint $table) {
            $table->dropForeign('score_expressions_year_id_foreign');
            $table->dropColumn('year_id');
        });
    }
}
