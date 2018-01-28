<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('building_user')) {
            Schema::create('building_user', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id');
                $table->integer('building_id');
                $table->dateTime('deleted_at')->nullable()->default(null);
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
        Schema::dropIfExists('building_user');
    }
}
