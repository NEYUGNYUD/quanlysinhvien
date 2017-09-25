<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClassIdForeignKeyStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('students', 'class_id')) {
            Schema::table('students', function(Blueprint $table) {
                $table->integer('class_id')->unsigned();
                $table->foreign('class_id')->references('id')->on('students');
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
        Schema::table('students', function(Blueprint $table) {
            $table->dropColumn('class_id');
            $table->dropForeign('class_id');
        });
    }
}
