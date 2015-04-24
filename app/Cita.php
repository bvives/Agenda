<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {

	public function contactes()
    {
        return $this->belongsToMany('App\Contacte')->withTimestamps();;
    }

}
