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
            $table->decimal('width');
            $table->decimal('height');
            for ($i = 1; $i <= 8; $i++) { 
                $table->integer("amount{$i}")->nullable();
            }
            $table->string('nameDigitalPress');
            $table->decimal('costPerUnitCopy');
            $table->string('nameMaterial');
            $table->decimal('widthMaterial');
            $table->decimal('heightMaterial');
            $table->decimal('costPerUnitMaterial');
            $table->decimal('minuteCostGraphicDesign');
            $table->integer('timeInMinutesGraphicDesign');
            for ($i = 1; $i <= 5; $i++) { 
                $table->string("manipulateName{$i}")->nullable();
                $table->string("manipulateType{$i}")->nullable();
                $table->decimal("manipulateUnitMinuteCost{$i}")->nullable();
                $table->decimal("manipulateCost{$i}")->nullable();
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
