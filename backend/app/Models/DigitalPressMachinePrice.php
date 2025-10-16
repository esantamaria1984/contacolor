<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DigitalPressMachinePrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'machineId',
        'color',
        'from',
        'to',
        'unitPerCopy',
    ];

    public function prices()
    {
        return $this->belongsTo(DigitalPressMachine::class, 'machineId');
    }
}
