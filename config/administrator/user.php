<?php
/**
 * User model config
 */


return array(
    'title' => 'Users',
    'single' => 'User',
    'model' => 'App\User',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Name',
            'select' => "name"
        ),
        'email' => array(
            'title' => 'email',
            'select' => "email"
        ),
        'created_at' => array(
            'title' => 'created_at',
            'select' => "created_at"
        ),
        'role' => array(
            'title' => 'role',
            'select' => "role",
        )
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'role' => array(
            'title' => 'role'
        ),
        'created_at' => array(
            'type'  => 'datetime',
            'title' => 'Created Ay'
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
        'role' => array(
            'title' => 'Name',
            'type' => 'text',
        )
    ),
);
