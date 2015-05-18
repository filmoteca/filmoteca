<?php

/**
 * Carousel model config
 */

return [
    'title' => 'Carousels',
    'single' => 'Carousel',
    'model' => '\Filmoteca\Models\Home\Carousel',

    'form_width' => 800,

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'slug' => array(
            'title' => 'Slug',
        ),
        'images' => array(
            'title' => 'Images',
            'relationship' => 'carouselImages',
            'select' => 'COUNT((:table).id)'
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text',
        )
    )
];