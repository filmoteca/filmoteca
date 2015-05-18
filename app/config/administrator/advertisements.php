<?php

/**
 * Advertisement model config
 */

return [
    'title' => 'Advertisements',
    'single' => 'Advertisement',
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
        'subtitle' => array(
            'title' => 'Subtitle'
        ),
        'description' => array(
            'title' => 'Description',
        ),
        'link' => array(
            'title' => 'Link'
        ),
        'poster' => array(
            'title' => 'poster',
            'output' => '<img src="/uploads/originals/(:value)" height="100" />'
        ),
        'embed' => array(
            'title' => 'Embed',
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
        'subtitle' => array(
            'title' => 'Subtitle'
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'textarea',
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
        ),
        'embed' => array(
            'title' => 'Embed',
            'type' => 'wysiwyg'
        ),
    ),
];