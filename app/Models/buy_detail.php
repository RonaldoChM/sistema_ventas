<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_detail extends Model
{
    use HasFactory;

    protected $table = ['product_id','buy_id','price','amount','lot_buys'];

    public function buys()
    {
        return $this->belongsTo(Buy::class);
        
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
        
    }

}
