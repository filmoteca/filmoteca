<?php

/**
 * Carousel Images model config
 */

return [
    'title' => 'Carousel Images',
    'single' => 'Carousel Image',
    'model' => '\Filmoteca\Models\Home\CarouselImage',

    'form_width' => 800,

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/originals/(:value)" height="100" />'
        ),
        'title' => array(
            'title' => 'Title',
        ),
        'description' => array(
            'title' => 'Description'
        ),
        'link' => array(
            'title' => 'link'
        ),
        'carousel_slug' => array(
            'title' => 'Carousel Slug',
            'relationship' => 'carousel',
            'select' => '(:table).slug'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'image' => array(
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path() . '/uploads/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2
        ),
        'title' => array(
            'title' => 'Title',
        ),
        'description' => array(
            'title' => 'Description'
        ),
        'link' => array(
            'title' => 'Link'
        ),
        'carousel' => array(
            'title' => 'Carousel Slug',
            'type' => 'relationship',
            'name_field' => 'slug'
        )
    )
];