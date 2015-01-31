<?php

return array(

	'uri' => 'contact',

	'view' => 'pages.contact',

	'fields' => array(
		'name' => array(
			'type' => 'text',
		),
//		'title' => array(
//			'type' => 'select',
//			'choices' => array(
//				'' => 'Please select',
//				'Mr' => 'Mr',
//				'Mrs' => 'Mrs',
//				'Miss' => 'Miss',
//				'Ms' => 'Ms',
//				'Dr' => 'Dr',
//				'Other' => 'Other',
//			),
//		),
//		'first_name' => array(
//			'type' => 'text',
//		),
//		'last_name' => array(
//			'type' => 'text',
//		),
		'email' => array(
			'type' => 'text',
		),
        'telephone' => array(
            'type' => 'text'
        ),
		'enquiry' => array(
			'type' => 'textarea',
		),
	),

	'rules' => array(
		'name' => 'required',
        'name' =>'required',
		'email' => 'required|email',
		'enquiry' => 'required'
	),

	'mail' => array(
		'views' => array(
			'laravel-contact-form::emails.html.enquiry',
			'laravel-contact-form::emails.text.enquiry',
		),
		'to' => array(
			'name' => 'Contacto Filmoteca',
			'email' => 'contacto@filmoteca.unam.mx',
		),
		'subject' => 'Website Enquiry',
	),

	'page_title' => 'Contact Us',
	'meta_description' => 'Fill in this form to contact us',
	'meta_keywords' => 'Contact',

);