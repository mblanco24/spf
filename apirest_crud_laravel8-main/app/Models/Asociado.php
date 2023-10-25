<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;
    protected $fillable = ['rif','nombres','direccion','razon_social','afiliacion','codigo_afiliacion','persona_de_contacto','telefono_contacto','email','cbancaria_1','cbancaria_2'];
}
