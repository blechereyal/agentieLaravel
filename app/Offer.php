<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model {

    protected $dates = [
        'expires_at'
    ];

    /**
     * @param $query
     */
    public function scopeAvailable($query)
    {
        return $query->where('expires_at', '>', Carbon::now())->where('places', '>', 0)->orderBy('created_at','DESC');
    }

	public function destination()
	{
		return $this->belongsTo('App\Destination');
	}

	public function offer_subscriptions()
	{
		return $this->hasMany('App\OfferSubscription');
	}
}
