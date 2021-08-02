<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'name',
        'last_name',
        'phone',
        'gender',
        'email',
        'password',
        'document_type',
        'document',
        'status'
    ];
    protected $hidden = [
        'phone',
        'email',
        'password',        
        'document_type',
        'document'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // relacion, un cliente a varias reservas
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
