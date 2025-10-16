<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DigitalPressMachine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'costPerUnitColor',
        'costPerUnitBlack'
    ];

    public function prices()
    {
        return $this->hasMany(DigitalPressMachinePrice::class, 'machineId');
    }
}
