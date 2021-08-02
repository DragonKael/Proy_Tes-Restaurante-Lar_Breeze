<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient_x_Product extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'id_ingredient',
        'id_product',
        'quantity',
        'measure', //u de medida
        'note'
      ];
      //relacion, un Ingredient_x_product a un producto
      public function products()
      {
          return $this->belongsTo('App\Models\Product');
      }
      //relacion, un Ingredient_x_product a un ingrediente
      public function ingredients()
      {
          return $this->belongsTo('App\Models\Ingredient');
      }
}
