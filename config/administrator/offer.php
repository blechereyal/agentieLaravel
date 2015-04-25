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
);
