<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount_total','discount','purchase_date','transaction','residue','type_document','nro_document','lot_buy','observation','status_buy','status','image'];
}
