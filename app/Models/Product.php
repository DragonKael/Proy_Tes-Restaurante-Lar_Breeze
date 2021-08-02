<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'name',
        'presentation',
        'price',
        'description',
        'category'.
        'measure',
        'price'
      ];
      //relacion, un producto a una orden_x_producto
      public function Order_x_product()
      {
          return $this->hasMany('App\Models\Order_x_Product');
      }
      //relacion, un producto a varios ingrdientes por producto
      public function ingredients_x_product()
      {
          return $this->hasMany('App\Models\Ingredient_x_Product');
      }
}
