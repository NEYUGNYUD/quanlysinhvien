<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('students', 'region', 'is_religion', 'priority', 'nation', 'province', 'district', 'ward', 'nationality', 'passport')) {
            Schema::table('students', function(Blueprint $table) {
                $table->string('region', 2); //khu vực ưu tiên
                $table->char('is_religion', 1); //tôn giáo
                $table->string('priority', 100); //đối tượng ưu tiên
                $table->string('nation', 50); //dân tộc
                $table->string('province', 50); //tỉnh/thành
                $table->string('district', 50); //quận/huyện
                $table->string('ward', 50); //xã/phường
                $table->string('nationality', 50); //quốc tịch
                $table->string('passport', 15);
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
            $table->dropColumn(['region', 'is_religion', 'priority', 'nation', 'province', 'district', 'ward', 'nationality', 'passport']);
        });
    }
}
