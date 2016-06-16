<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    //
    protected $table='status';

    protected $fillable=['nombre'];

    public function dato(){
    	return $this->hasMany('App\dato');
    }
}
