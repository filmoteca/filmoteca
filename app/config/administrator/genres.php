<?php

/**
 * Genre model config
 */

return [
    'title' => 'Genres',
    'single' => 'Genre',
    'model' => '\Filmoteca\Models\Genre',

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Name'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name'
        )
    ),
];