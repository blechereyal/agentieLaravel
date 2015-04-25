<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {

	public function destination()
	{
		return $this->belongsTo('App\Destination');
	}

	public function offer_subscriptions()
	{
		return $this->hasMany('App\OfferSubscription');
	}
}
