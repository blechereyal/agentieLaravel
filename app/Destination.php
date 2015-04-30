<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Destination extends Model {
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'destinations.name' => 10,
            'offers.name' => 5
        ],
        'joins' => [
            'offers' => ['destinations.id','offers.destination_id'],
        ],
    ];

	public function offers()
	{
		return $this->hasMany('App\Offer');
	}

}
