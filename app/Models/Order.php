<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guarded = [
        'id',
    ];

    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($order) {
            $order->id = self::generateUniqueRandomId(5); // Generate unique random ID
        });
    }
    
    private static function generateUniqueRandomId($length)
    {
        do {
            $id = '';
            for ($i = 0; $i < $length; $i++) {
                $id .= self::getRandomCharacter(); // Generate random character
            }
        } while (self::where('id', $id)->exists()); // Check for uniqueness
    
        return $id;
    }
    
    private static function getRandomCharacter()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        return $characters[mt_rand(0, strlen($characters) - 1)]; // Get a random character
    }
}
