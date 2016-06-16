<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    //
    protected $table='ubicaciones';
    protected $fillable=['municipio','colonia','calle','C-P'
    ,'NUM_EX'];

    public function dates(){

    	return $this->hasMany('App\dato');
    }
}
