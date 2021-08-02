<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'name',
        'location',
        'phone',
        'email',
        'time_open',
        'time_close',
        'document',
        'opening',
        'status',
        'id_company'
    ];

    //relacion, una sucursal a muchas mesas
    public function tables(){
        return $this->hasMany('App\Models\Table');
    }
    //relacion, una sucursal a una empresa/compañia
    public function companies(){
        return $this->belongsTo('App\Models\Company');
    }
}
