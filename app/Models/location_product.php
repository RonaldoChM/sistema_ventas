<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location_product extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'location_id', 'description'];

    public function products()
    {
        return $this->belongsTo(Product::class);
        
    }
    public function locations()
    {
        return $this->belongsTo(Location::class);
        
    }

}
