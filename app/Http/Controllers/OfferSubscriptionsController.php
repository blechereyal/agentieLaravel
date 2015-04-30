<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Destination;
use App\Offer;
use App\OfferSubscription;

use Illuminate\Http\Request;
use App\Http\Requests\CreateOfferSubscriptionRequest;

class OfferSubscriptionsController extends Controller {


    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    /**
     * Show the form for creating a new resource.
     *
     * @param Destination $destination
     * @param Offer $offer
     * @return Response
     */
	public function create(Destination $destination, Offer $offer)
	{
		return view('offer_subscriptions.create', compact('destination','offer'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Destination $destination
     * @param Offer $offer
     * @param CreateOfferSubscriptionRequest $request
     * @return Response
     */
	public function store(Destination $destination, Offer $offer, CreateOfferSubscriptionRequest $request)
	{
        $offer->offer_subscriptions()->save(new OfferSubscription($request->all()));
		return redirect()->route('destinations.offers.show',array($destination->slug, $offer->slug));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
