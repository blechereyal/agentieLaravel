<?php namespace App\Providers;

use App\Offer;
use App\OfferSubscription;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'event.name' => [
			'EventListener',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		OfferSubscription::creating(function(OfferSubscription $offerSubscription){
           $offer = $offerSubscription->offer;
            if ($offerSubscription->people > $offer->places){
                return false;
            }

            $offer->places = $offer->places - $offerSubscription->people;
            $offer->save();

            return true;
        });
	}

}
