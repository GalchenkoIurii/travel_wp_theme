<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),

    // Custom options
    'custom_id' => array(
        'label' => __('Custom ID', 'cln'),
        'desc'  => __('Insert the ID of block', 'cln'),
        'type'  => 'text',
    ),
    'custom_class' => array(
        'label' => __('Custom Class', 'cln'),
        'desc'  => __('Insert the Class of block', 'cln'),
        'type'  => 'text',
    ),
);
