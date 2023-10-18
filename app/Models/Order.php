<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalPrice',
        'action',
        'comment',
        'user_id',
    ];
    
    function product(){
        return $this->belongsToMany(Product::class,'product_order','order_id','product_id');
    }
}
