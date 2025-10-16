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
        Schema::create('big_format_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('costPerM2to1m');
            $table->decimal('costPerM2to10m');
            $table->decimal('costPerM2to20m');
            $table->decimal('costPerM2to30m');
            $table->decimal('costPerM2to40m');
            $table->decimal('costPerM2to50m');
            $table->decimal('costPerM2to100m');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('big_format_materials');
    }
};
