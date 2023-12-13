<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'cell_phone', 'status','company_id'];

    public function locations()
    {
        return $this->hasMany(Location::class);
        
    }
    
    public function office_users()
    {
        return $this->hasMany(Office_user::class);
        
    }

    public function companies()
    {
        return $this->belongsTo(Company::class);
        
    }

}
