<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_x_Product extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'id_product',
        'id_order',
        'details'
    ];
    //relacion, un Order_x_product a un producto
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    //relacion, un Order_x_product a una orden
    public function orders()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
