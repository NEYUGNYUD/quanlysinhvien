<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTermIdSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('subjects', 'term_id')) {
            Schema::table('subjects', function(Blueprint $table) {
               $table->integer('term_id')->unsigned();
               $table->foreign('term_id')->references('id')->on('terms');
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
        Schema::table('subjects', function(Blueprint $table) {
            $table->dropColumn('term_id');
            $table->dropForeign('term_id');
        });
    }
}
