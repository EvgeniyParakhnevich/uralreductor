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
        Schema::create('mounting_position_on_the_flange_gear_motor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flange_id')->constrained('mounting_position_on_the_flanges')->onDelete('cascade');
            $table->foreignId('motor_id')->constrained('gear_motors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mounting_position_on_the_flange_gear_motor');
    }
};
