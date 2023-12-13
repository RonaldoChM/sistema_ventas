<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'cost', 'characteristics','code','lot','brand','warranty','mimimum_amount','industry','status','image','category_id'];

    public function location_product()
    {
        return $this->hasMany(Location_product::class);
        
    }

    public function buy_details()
    {
        return $this->hasMany(Buy_detail::class);
        
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
        
    }

}
