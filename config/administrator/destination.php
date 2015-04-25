<?php
/**
 * Destination model config
 */
return array(
	'title' => 'Destination',
	'single' => 'Destination',
	'model' => 'App\Destination',
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Name',
			'select' => "name",
		),
		'image' => array(
        'title' => 'Image',
        'output' => '<img src="/uploads/destinations/detail/(:value)" height="100" />',
    ),
		'destination' => array(
			'title' => 'offers',
			'relationship' => 'offers',
			'select' => 'COUNT((:table).name)',
		),
    // ,
		// 'num_films' => array(
		// 	'title' => '# films',
		// 	'relationship' => 'films',
		// 	'select' => 'COUNT((:table).id)',
		// ),
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
		'image' => array(
      'title' => 'Image (1200 x 1314)',
      'type' => 'image',
      'naming' => 'random',
      'location' =>  public_path() . '/uploads/destinations/originals/',
      'size_limit' => 2,
      'sizes' => array(
          array(1200, 1314, 'crop', public_path() . '/uploads/destinations/resize/', 100),
          array(452, 495, 'landscape', public_path() . '/uploads/destinations/detail/', 100),
      )
    ),
		'description' => array(
	    'type' => 'wysiwyg',
	    'title' => 'Description',
		),
		// 'offers' => array(
	  //   'type' => 'relationship',
	  //   'title' => 'Offers',
	  //   'name_field' => 'name',
		// 	'constraints' => array('destination' => 'offers')
		// )

	),
);
