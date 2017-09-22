<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students')) {
            Schema::create('students', function(Blueprint $table) {
                $table->increments('id');
                $table->string('code', 15);
                $table->string('first_name', 50);
                $table->string('last_name', 30);
                $table->date('dob');
                $table->char('gender', 1);
                $table->string('password');
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
        Schema::dropIfExists('students');
    }
}
