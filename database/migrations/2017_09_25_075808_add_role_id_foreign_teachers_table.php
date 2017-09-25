<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdForeignTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('teachers', 'role_id')) {
            Schema::table('teachers', function(Blueprint $table) {
                $table->integer('role_id')->unsigned();
                $table->foreign('role_id')->references('id')->on('roles');
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
        Schema::table('teachers', function(Blueprint $table) {
            $table->dropForeign('teachers_role_id_foreign');
            $table->dropColumn('role_id');
        });
    }
}
