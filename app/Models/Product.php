<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

<<<<<<< HEAD
    
    function category(){
=======
    function category()
    {
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc
        return $this->belongsTo(Category::class);
    }

    function order()
    {
        return $this->belongsToMany(Order::class);
    }
    
}
