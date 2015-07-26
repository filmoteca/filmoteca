<?php

/**
 * Redirect model config
 */

return [
    'title' => 'Redirects',
    'single' => 'Redirect',
    'model' => '\Filmoteca\Models\Redirect',

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'old' => array(
            'title' => 'Old'
        ),
        'new' => array(
            'title' => 'New',
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'old' => array(
            'title' => 'Old',
            'type' => 'text'
        ),
        'new' => array(
            'title' => 'New',
            'type' => 'text'
        )
    ),
];