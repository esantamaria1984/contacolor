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
            $table->decimal('costPerUnitColor');
            $table->decimal('costPerUnitBlack');
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
