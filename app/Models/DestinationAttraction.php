<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationAttraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'name',
        'desc',
    ];

    public function destination() {
        return $this->belongsTo(Destination::class);}
}
