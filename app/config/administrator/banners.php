<?php

/**
 * Advertisement model config
 */

return [
    'title' => 'Banners',
    'single' => 'Banner',
    'model' => '\Filmoteca\Models\Home\Advertisement',

    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 600,


    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'slug' => array(
            'title' => 'Slug'
        ),
        'title' => array(
            'title' => 'Title'
        ),
        'link' => array(
            'title' => 'Link'
        ),
        'poster' => array(
            'title' => 'poster',
            'output' => '<img src="/uploads/originals/(:value)" height="100" />'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'slug' => array(
            'title' => 'Slug'
        ),
        'title' => array(
            'title' => 'Title'
        ),
        'link' => array(
            'title' => 'Link'
        ),
        'poster' => array(
            'title' => 'poster',
            'type' => 'image',
            'location' => public_path() . '/uploads/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2
        )
    ),
];