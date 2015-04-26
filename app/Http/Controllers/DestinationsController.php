<?php namespace App\Http\Controllers;

use App\Destination;
use App\Offer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class DestinationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$destinations = Destination::orderBy('created_at','DESC')->paginate(5);
		return view('destinations.index', compact('destinations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Destination $destination
	 * @return Response
	 */
	public function show(Destination $destination)
	{
		$offers = $destination->offers()->available()->paginate(10);
		return view('destinations.show', compact('destination','offers'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Destination $destination
	 * @return Response
	 */
	public function edit(Destination $destination)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Destination $destination
	 * @return Response
	 */
	public function update(Destination $destination)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Destination $destination
	 * @return Response
	 */
	public function destroy(Destination $destination)
	{
		//
	}

}
