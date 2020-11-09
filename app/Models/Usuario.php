<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre','a_paterno','a_materno','imagen','rol','activo','password'];
}