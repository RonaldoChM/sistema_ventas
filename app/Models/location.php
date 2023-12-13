<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['cod', 'description', 'type', 'status', 'office_id'];

    public function location_users()
    {
        return $this->hasMany(Location_user::class);
        
    }

    public function location_products()
    {
        return $this->hasMany(Location_product::class);
        
    }

    public function offices()
    {
        return $this->belongsTo(Office::class);
        
    }

}
