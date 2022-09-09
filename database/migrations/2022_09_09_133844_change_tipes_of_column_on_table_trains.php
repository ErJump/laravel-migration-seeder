<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTipesOfColumnOnTableTrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 20)->change();
            $table->string('departure_station', 30)->change();
            $table->string('arrival_station', 30)->change();
            $table->string('train_code', 10)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company')->change();
            $table->string('departure_station')->change();
            $table->string('arrival_station')->change();
            $table->string('train_code')->change();
        });
    }
}
