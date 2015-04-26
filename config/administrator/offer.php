<?php
/**
 * Destination model config
 */


return array(
	'title' => 'Offer',
	'single' => 'Offer',
	'model' => 'App\Offer',
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Name',
			'select' => "name",
		),
		'places' => array(
			'title' => 'places',
			'select' => "places",
		),
		'expires_at' => array(
			'title' => 'expires_at',
			'select' => "expires_at",
		),
		'destination' => array(
			'title' => 'destination',
			'relationship' => 'destination',
			'select' => '(:table).name',
		),
		// 'formatted_birth_date' => array(
		// 	'title' => 'Birth Date',
		// 	'sort_field' => 'birth_date',
		// ),
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'destination' => array(
			'title' => 'destination',
			'type' => 'relationship',
			'name_field' => 'name',
		),
		'name' => array(
			'title' => 'Name'
		)
    // ,
		// 'first_name' => array(
		// 	'title' => 'First Name',
		// ),
		// 'last_name' => array(
		// 	'title' => 'Last Name',
		// ),
		// 'films' => array(
		// 	'title' => 'Films',
		// 	'type' => 'relationship',
		// 	'name_field' => 'name',
		// ),
		// 'birth_date' => array(
		// 	'title' => 'Birth Date',
		// 	'type' => 'date'
		// ),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),
		'description' => array(
	    'type' => 'wysiwyg',
	    'title' => 'Description',
		),
		'destination' => array(
	    'type' => 'relationship',
	    'title' => 'Destination',
	    'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
		),
		'expires_at' => array(
    'type' => 'datetime',
    'title' => 'Expire Time',
    'date_format' => 'yy-mm-dd', //optional, will default to this value
    'time_format' => 'HH:mm',    //optional, will default to this value
		),
		'places' => array(
    'type' => 'number',
    'title' => 'Places',
		)

    // ,
		// 'last_name' => array(
		// 	'title' => 'Last Name',
		// 	'type' => 'text',
		// ),
		// 'birth_date' => array(
		// 	'title' => 'Birth Date',
		// 	'type' => 'date',
		// ),
		// 'films' => array(
		// 	'title' => 'Films',
		// 	'type' => 'relationship',
		// 	'name_field' => 'name',
		// ),
	),
    'actions' => array(
        'download_excel' => [
            'title' => 'Download CSV',
            'messages' => [
                'active' => 'Creating the csv...',
                'success' => 'CSV created! Downloading now...',
                'error' => 'There was an error while creating the csv',
            ],
            //the Eloquent query builder is passed to the closure
            'action' => function($query)
            {
                //get all the rows for this query
                $data = $query->offer_subscriptions()->get();

                //do something to put it into excel
                $file = Excel::create($query->get()->first()->slug, function ($excel) use ($data) {

                    // Set sheets
                    $excel->sheet('first sheet', function ($sheet) use ($data) {

                        // Sheet manipulation
                        $sheet->fromArray($data);
                    });
                })->store('csv', storage_path('excel/exports'), true);
                \Illuminate\Support\Facades\Log::info('asdf');

                return response()->download($file['full'],'filename.csv');
            }
        ],

    ),
);
