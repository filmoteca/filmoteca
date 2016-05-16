<?php

/**
 * Page model config
 */

return [
    'title' => 'Pages',
    'single' => 'Page',
    'model' => '\Filmoteca\Models\Page',

    'form_width' => 800,

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title' => array(
            'title' => 'Title'
        ),
        'slug' => array(
            'title' => 'Slug',
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text',
        ),
        'body' => array(
            'title' => 'Content',
            'type' => 'wysiwyg',
        ),
    ),
];