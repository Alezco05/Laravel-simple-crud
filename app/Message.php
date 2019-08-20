<?php

namespace App;


//Laravel por defecto encuentra la tabla messages (que es el mismo nombre del modelo pero en minusculas y en plural)
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Para contrarestar la inyeccion maxima de datos
    protected $fillable = ['nombre','email','mensaje'];
}
