<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    //datos obligados
    protected $fillable=[
        'presentation',
        'brand',
        'type',
        'name',
        'measure',
        'price'
      ];
      //relacion, un ingrediente a varios ingrediente por producto
      public function ingredients()
      {
          return $this->hasMany('App\Models\Product');
      }
}
