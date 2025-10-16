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
        Schema::create('budget_big_formats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idClient')->constrained('clients')->onDelete('cascade');
            $table->decimal('width');
            $table->decimal('height');
            for ($i = 1; $i <= 8; $i++) { 
                $table->integer("amount{$i}")->nullable();
            }
            $table->string('namePlotter');
            $table->decimal('inkCostCC');
            $table->string('nameMaterial');
            for ($i = 1; $i <= 8; $i++) { 
                $table->decimal("amountM2Material{$i}")->nullable();
            }
            $table->decimal('costPerM2');
            $table->decimal('minuteCostGraphicDesign');
            $table->integer('timeInMinutesGraphicDesign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets_big_format');
    }
};
