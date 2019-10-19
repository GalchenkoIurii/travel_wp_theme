<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'icon',
		'label' => __( 'Icon', 'fw' )
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Icon title', 'fw' ),
	),

    // Custom options
    'url' => array(
        'label' => __('Url', 'cln'),
        'desc'  => __('Insert the URL of icon', 'cln'),
        'type'  => 'text',
    ),
);