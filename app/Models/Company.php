<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
     //campos obligatorios
     protected $fillable=[
        'name',
        'description',
        'sector'
    ];
    // relacion, una compania a varias sucursales
    public function branches()
    {
        return $this->hasMany('App\Models\Branch');
    }
}
