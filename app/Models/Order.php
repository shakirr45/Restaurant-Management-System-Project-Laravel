<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //from user.php model===>
    protected $fillable = [
        'food_name',
        'food_price',
        'food_quantity',
        'name',
        'phone',
        'address',
    ];
}
