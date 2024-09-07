<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'desc',
        'duration_days',
        'duration_night',
        'price',
        'min_book',
        'fac_homestay',
        'fac_guide',
        'fac_insurance',
        'fac_meal',
        'fac_snack',
        'fac_merchandise',
    ];

    public function order() {
        return $this->hasMany(Order::class);}
}
