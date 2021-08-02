<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'id_table',
        'status',
        'modality',
        'id_user',
        'id_client'
      ];
      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $hidden = [
          'id_user',
          'id_client'
      ];
      //relacion, una orden a una mesa
      public function table()
      {
          return $this->belongsTo('App\Models\Table');
      }
      //relacion, una orden a varias ordenes_x_productos
      public function orden_x_product()
      {
          return $this->hasMany('App\Models\Order_x_Product');
      }
}
