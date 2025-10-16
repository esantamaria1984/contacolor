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
        Schema::create('digital_press_machine_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machineId')->constrained('digital_press_machines')->onDelete('cascade');
            $table->string('color');
            $table->integer('from');
            $table->integer(('to'));
            $table->decimal('unitPerCopy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digital_press_machine_prices');
    }
};
