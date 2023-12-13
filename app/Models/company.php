<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'shortname', 'address', 'phone', 'image'];

    public function offices()
    {
        return $this->hasMany(Office::class);
        
    }

}
