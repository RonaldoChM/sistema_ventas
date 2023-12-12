<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'cost', 'characteristics','code','lot','brand','warranty','mimimum_amount','industry','status','image','category_id'];

}
