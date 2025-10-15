<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetDigitalPress extends Model
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
        'nameDigitalPress',
        'costPerUnitCopy',
        'nameMaterial',
        'widthMaterial',
        'heightMaterial',
        'costPerUnitMaterial',
        'minuteCostGraphicDesign',
        'timeInMinutesGraphicDesign',
        'manipulateName1',
        'manipulateType1',
        'manipulateUnitMinuteCost1',
        'manipulateName2',
        'manipulateType2',
        'manipulateUnitMinuteCost2',
        'manipulateName3',
        'manipulateType3',
        'manipulateUnitMinuteCost3',
        'manipulateName4',
        'manipulateType4',
        'manipulateUnitMinuteCost4',
        'manipulateName5',
        'manipulateType5',
        'manipulateUnitMinuteCost5',
        'comercialMargin'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'idClient');
    }
}
