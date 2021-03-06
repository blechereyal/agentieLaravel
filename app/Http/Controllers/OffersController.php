<?php namespace App\Http\Controllers;

use App\Destination;
use App\Offer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OffersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param Destination $destination
     * @return Response
     */
	public function index(Destination $destination)
	{
		//
	}

    /**
     * Show the form for creating a new resource.
     *
     * @param Destination $destination
     * @return Response
     */
	public function create(Destination $destination)
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Destination $destination
     * @return Response
     */
	public function store(Destination $destination)
	{
		//
	}

    /**
     * Display the specified resource.
     *
     * @param Destination $destination
     * @param Offer $offer
     * @return Response
     * @internal param int $id
     */
	public function show(Destination $destination, Offer $offer)
	{
		return view('offers.show', compact('destination','offer'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Destination $destination
     * @param Offer $offer
     * @return Response
     * @internal param int $id
     */
	public function edit(Destination $destination, Offer $offer)
	{
		//
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Destination $destination
     * @param Offer $offer
     * @return Response
     * @internal param int $id
     */
	public function update(Destination $destination, Offer $offer)
	{
		//
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param Destination $destination
     * @param Offer $offer
     * @return Response
     * @internal param Destination $destination
     */
	public function destroy(Destination $destination, Offer $offer)
	{
		//
	}

}
