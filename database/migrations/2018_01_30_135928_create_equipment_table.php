<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('equipments')) {
            Schema::create('equipments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('category');
                $table->string('company');
                $table->integer('price');
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
        Schema::dropIfExists('equipments');
    }
}
