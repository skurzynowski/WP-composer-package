<?php

namespace DecentProductivity\WpFeatures\Shortcodes\About;
/**
 * Acf configuration
 */
class AcfConfiguration {

	function __construct() {
		if ( function_exists( 'acf_add_local_field_group' ) ) :
			acf_add_local_field_group(
				array(
					'key'                   => 'group_5ccc3c7cb2e8f',
					'title'                 => 'About section',
					'fields'                => array(
						array(
							'key'               => 'field_5ccc3c8da5bc0',
							'label'             => 'title',
							'name'              => 'title',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_5ccc3ca1a5bc1',
							'label'             => 'img',
							'name'              => 'img',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
							'preview_size'      => 'medium',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => 'jpg,png',
						),
						array(
							'key'               => 'field_5ccc3cf7a5bc3',
							'label'             => 'name',
							'name'              => 'name',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_5ccc3de9e4310',
							'label'             => 'profession',
							'name'              => 'profession',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_5ccc3ceba5bc2',
							'label'             => 'description',
							'name'              => 'description',
							'type'              => 'wysiwyg',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'full',
							'media_upload'      => 1,
							'delay'             => 0,
						),
					),
					'location'              => array(
						array(
							array(
								'param'    => 'options_page',
								'operator' => '==',
								'value'    => 'acf-options',
							),
						),
					),
					'menu_order'            => 0,
					'position'              => 'normal',
					'style'                 => 'default',
					'label_placement'       => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen'        => '',
					'active'                => true,
					'description'           => '',
				)
			);
endif;
	}
}
