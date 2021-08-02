<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;
    //campos oligatorioss
    protected $fillable=[
        'id_branch',
        'capacity',
        'status'
      ];
      //relacion, una mesa a una sucursal
      public function branches()
      {
          return $this->belongsTo('App\Models\Branch');
      }
      //relacion, una mesa a una orden
      public function Orders()
      {
          return $this->hasMany('App\Models\Order');
      }
}
