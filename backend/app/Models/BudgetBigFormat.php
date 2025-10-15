<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetBigFormat extends Model
{
    use HasFactory;

    protected $fillable = [
        'idClient',
        'width',
        'height',
        'amount1',
        'amount2',
        'amount3',
        'amount4',
        'amount5',
        'amount6',
        'amount7',
        'amount8',
        'namePlotter',
        'inkCostCm2',
        'nameMaterial',
        'amountM2Material1',
        'amountM2Material2',
        'amountM2Material3',
        'amountM2Material4',
        'amountM2Material5',
        'amountM2Material6',
        'amountM2Material7',
        'amountM2Material8',
        'costPerM2',
        'minuteCostGraphicDesign',
        'timeInMinutesGraphicDesign'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'idClient');
    }
}
