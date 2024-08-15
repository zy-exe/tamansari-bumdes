<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomestayImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'homestay_id',
        'img',
        'desc',
    ];

    public function homestay() {
        return $this->belongsTo(Homestay::class);}
}
