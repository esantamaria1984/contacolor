<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cif',
        'address',
        'phone',
        'contact',
        'phoneContact'
    ];

    public function budgetsDigitalPress()
    {
        return $this->hasMany(BudgetDigitalPress::class, 'idClient');
    }

    public function budgetsBigFormat()
    {
        return $this->hasMany(BudgetBigFormat::class, 'idClient');
    }
}
