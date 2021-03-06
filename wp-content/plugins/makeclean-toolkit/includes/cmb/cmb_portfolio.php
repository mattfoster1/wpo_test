<?php

// Start with an underscore to hide fields from custom fields list
$prefix = 'ow_cf_';

$cmb_portfolio = new_cmb2_box( array(
	'id'            => $prefix . 'metabox_portfolio',
	'title'         => __( 'Options', 'makeclean' ),
	'object_types'  => array( 'ow_portfolio', ), // Post type
	'context'       => 'normal',
	'priority'      => 'high',
	'show_names'    => true, // Show field names on the left
) );

$cmb_portfolio->add_field( array(
	'name'         => __( 'Add Or Upload Images', 'makeclean' ),
	'id'           => $prefix . 'portfolio_imglist',
	'type'         => 'file_list',
) );

/*  Repeatable Group Field */
$cmb_portfolio_grp = $cmb_portfolio->add_field( array(
	'id'          => $prefix . 'portfolio_grp',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => __( 'Content Box {#}', 'makeclean' ), // {#} gets replaced by row number
		'add_button'    => __( 'Add Item', 'makeclean' ),
		'remove_button' => __( 'Remove Item', 'makeclean' ),
	),
	'closed'     => true,
) );

$cmb_portfolio->add_group_field( $cmb_portfolio_grp, array(
	'name' => 'Title',
	'id'   => 'portfolio_single_txt',
	'type' => 'text',
) );

$cmb_portfolio->add_group_field( $cmb_portfolio_grp, array(
	'name' => 'Value',
	'id'   => 'portfolio_single_value',
	'type' => 'text',  
) );

/* - Page Description */
$cmb_page = new_cmb2_box( array(
	'id'            => $prefix . 'metabox_portfolio_page',
	'title'         => __( 'Page Options', "makeclean" ),
	'object_types'  => array( 'ow_portfolio' ), // Post type
	'context'       => 'normal',
	'priority'      => 'high',
	'show_names'    => true, // Show field names on the left
) );

$cmb_page->add_field( array(
	'name'             => 'Page Layout',
	'desc'             => 'Select an option',
	'id'               => $prefix . 'page_layout',
	'type'             => 'select',
	'default'          => 'fixed',
	'options'          => array(
		'fixed' => __( 'Fixed', "makeclean" ),
		'fluid'   => __( 'Fluid', "makeclean" ),
	),
) );

$cmb_page->add_field( array(
	'name'             => 'Sidebar Position',
	'desc'             => 'Select an option',
	'id'               => $prefix . 'sidebar_layout',
	'type'             => 'select',
	'default'          => 'no_sidebar',
	'options'          => array(
		'right_sidebar'   => __( 'Right', "makeclean" ),
		'left_sidebar' => __( 'Left', "makeclean" ),
		'no_sidebar'   => __( 'None', "makeclean" ),
	),
) );

$cmb_page->add_field( array(
	'name'             => 'Widget Area',
	'desc'             => 'Select an option',
	'id'               => $prefix . 'widget_area',
	'type'             => 'select',
	'default'          => 'sidebar-1',
	'options'          => array(
		'sidebar-1' => __( 'Primary Sidebar', "makeclean" ),
		'sidebar-2'   => __( 'Secondary Sidebar', "makeclean" ),
	),
) );

$cmb_page->add_field( array(
	'name'             => 'Page Header',
	'desc'             => 'Select an option',
	'id'               => $prefix . 'page_title',
	'type'             => 'select',
	'default'          => 'enable',
	'options'          => array(
		'enable' => __( 'Enable', "makeclean" ),
		'disable'   => __( 'Disable', "makeclean" ),
	),
) );

$cmb_page->add_field( array(
	'name'       => __( 'Sub Title', "makeclean" ),
	'id'         => $prefix . 'page_sub_title',
	'type'       => 'text',
) );

$cmb_page->add_field( array(
	'name' => __( 'Header Image', "makeclean" ),
	'desc' => __( 'Upload an image or enter a URL.', "makeclean" ),
	'id'   => $prefix . 'page_header_img',
	'type' => 'file',
) );
?>