<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    //
    protected $table='sensores';
    protected $fillable=['sen_NombreSensor','sen_Status'];
    public function dato(){

    	return $this->hasMany('App\dato');
    }
}
