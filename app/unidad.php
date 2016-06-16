<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad extends Model
{
    //

    protected $table='unidades';
    protected $fillaable=['tipo','abreviacion','un_st_id'];
}
