<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location_user extends Model
{
    use HasFactory;
    protected $fillable = ['location_id','user_id','type','adjustment','observation','status'];

    public function locations()
    {
        return $this->belongsTo(Location::class);
        
    }
    public function users()
    {
        return $this->belongsTo(User::class);
        
    }

}
