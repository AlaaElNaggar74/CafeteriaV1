<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalPrice',
        'comment',
        'user_id',
    ];
    
    function product(){
        return $this->belongsToMany(Product::class);
    }
}
