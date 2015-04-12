<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {

	public function destination()
	{
		return $this->belongsTo('App\Destination');
	}

}
