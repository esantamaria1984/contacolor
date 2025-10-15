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
        Schema::create('budget_digital_presses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idClient')->constrained('clients')->onDelete('cascade');
            $table->integer('width');
            $table->integer('height');
            for ($i = 1; $i <= 8; $i++) { 
                $table->integer("amount{$i}")->nullable();
            }
            $table->string('nameDigitalPress');
            $table->integer('costPerUnitCopy');
            $table->string('nameMaterial');
            $table->integer('widthMaterial');
            $table->integer('heightMaterial');
            $table->integer('costPerUnitMaterial');
            $table->integer('minuteCostGraphicDesign');
            $table->integer('timeInMinutesGraphicDesign');
            for ($i = 1; $i <= 5; $i++) { 
                $table->integer("manipulateName{$i}")->nullable();
                $table->string("manipulateType{$i}")->nullable();
                $table->integer("manipulateUnitMinuteCost{$i}")->nullable();
                $table->integer("manipulateCost{$i}")->nullable();
            }
            $table->integer('comercialMargin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets_digital_press');
    }
};
