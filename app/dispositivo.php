<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dispositivo extends Model
{
    //
    protected $table='dispositivos';
   protected $fillable=['NombreDispositivo','Status','dis_loc'];
   public function datos()
   {
   	return $this ->hasMany('App\dato');
   }
}
