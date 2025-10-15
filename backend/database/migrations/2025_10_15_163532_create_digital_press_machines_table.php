<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('digital_press_machines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('cost50PerUnitCopy');
            $table->integer('cost100PerUnitCopy');
            $table->integer('cost200PerUnitCopy');
            $table->integer('cost300PerUnitCopy');
            $table->integer('cost400PerUnitCopy');
            $table->integer('cost500PerUnitCopy');
            $table->integer('cost600PerUnitCopy');
            $table->integer('cost750PerUnitCopy');
            $table->integer('cost1000PerUnitCopy');
            $table->integer('cost1250PerUnitCopy');
            $table->integer('cost1500PerUnitCopy');
            $table->integer('cost2000PerUnitCopy');
            $table->integer('cost3000PerUnitCopy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digital_press_machines');
    }
};
