<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'desctination_id',
        'img',
        'title',
        'desc',
    ];

    public function destination() {
        return $this->belongsTo(Destination::class);}
}
