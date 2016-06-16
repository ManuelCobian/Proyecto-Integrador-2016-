<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    //
    protected $table='permisos';
    protected $fillable=['nombre','per_st_id'];
}
