<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_user extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','branch_id','status','final_date'];

    public function users()
    {
        return $this->belongsTo(User::class);
        
    }

    public function offices()
    {
        return $this->belongsTo(Office::class);
        
    }

}
