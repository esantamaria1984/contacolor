<?php

namespace Database\Seeders;

use App\Models\DigitalPressMachine;
use Illuminate\Database\Seeder;

class DigitalPressMachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DigitalPressMachine::create([
            'name' => 'Xerox Versant 80',
            'costPerUnitColor' => 0.06,
            'costPerUnitBlack' => 0.005
        ]);

        DigitalPressMachine::create([
            'name' => 'Konica Minolta Bizhub Pro 1060',
            'costPerUnitColor' => 0.08,
            'costPerUnitBlack' => 0.01
        ]);
    }
}
