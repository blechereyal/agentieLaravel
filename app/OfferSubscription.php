<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferSubscription extends Model {

	protected $fillable = array('name', 'email', 'people', 'phone');

	public function offer()
	{
		return $this->belongsTo('App\Offer');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
