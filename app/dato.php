<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dato extends Model
{
    //
    protected $table='datoscapturados';
    protected $fillable=['dat_id','dat_id_Dispositivo','dat_id_sensor','dat_dc_dato'
    ,'fecha'];

 	public function dispositivo(){
 		return $this->belongsTo('App\dispositivo');
 	}
 	public function Status(){
 		return $this->belongsTo('App\status');
 	}
 	public function unidad()
 	{
 		return $this->belongsTo('App\unidad');
 	}
 	 public function sensor(){
 	 	return $ths->belongsTo('App\sensor');
 	 }

 	 public function ubicacion(){
 	 	return $this->belongsTo('App\ubicacion');
 	 }


}
