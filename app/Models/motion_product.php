<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motion_product extends Model
{
    use HasFactory;

    protected $fillable = ['location_id','user_id','type','adjustment','observation','status'];

}
