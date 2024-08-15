<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'invitation',
    ];

    public function images() {
        return $this->hasMany(DestinationImage::class);}

    public function attractions() {
        return $this->hasMany(DestinationAttraction::class);}
}