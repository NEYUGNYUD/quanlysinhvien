<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('parents')) {
            Schema::create('parents', function(Blueprint $table) {
                $table->increments('id');
                $table->string('dad_name', 100);
                $table->string('dad_job', 100);
                $table->string('mom_name', 100);
                $table->string('mom_job', 100);
                $table->string('dad_address', 100);
                $table->string('mom_address', 100);
                $table->string('dad_phone', 11);
                $table->string('mom_phone', 11);
                $table->integer('student_id')->unsigned();
                $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('parents');
    }
}
