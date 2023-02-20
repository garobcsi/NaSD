<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_type', function (Blueprint $table) {
            $table->id();
            $table->string('name',35);
            $table->integer("health_amount");
            $table->integer("nutritious_amount");
            $table->integer("energy_amount");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_type');
    }
};
