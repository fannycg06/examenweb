<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mal extends Model
{
    use HasFactory;
    protected $table = 'mals'; 

    protected $fillable=[
        'nombre',
        'tipo',
        'daño',
        
    ];

    protected $hidden=[
        'created_at',
        'update_at',
    ];
}
