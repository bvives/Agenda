<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacte extends Model {
    
    protected $guarded = [];

	public function citas()
    {
        return $this->belongsToMany('App\Cita');
    }

}
