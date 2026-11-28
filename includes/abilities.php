<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'wp_abilities_api_categories_init', 'listo_register_categories' );

function listo_register_categories() {
	wp_register_ability_category(
		'standardized-dataset',
		array(
			'label' => __( 'Standardized Dataset', 'listo' ),
			'description' => __( "Abilities that return a dataset specified by an international standard.", 'listo' ),
		)
	);
}

add_action( 'wp_abilities_api_init', 'listo_register_abilities' );

function listo_register_abilities() {
	wp_register_ability(
		'listo/get-countries',
		listo_get_ability_args( array(
			'label' => __( 'Get Countries List', 'listo' ),
			'description' => __( "Returns a list of countries and dependent territories based on the ISO 3166 standard.", 'listo' ),
			'execute_callback' => static function ( $options ) {
				return listo( 'countries', $options );
			},
		) )
	);
}

function listo_get_ability_args( $args = array() ): array {
	return wp_parse_args( $args, array(
		'category' => 'standardized-dataset',
		'input_schema' => array(
			'type' => array( 'object', 'null' ),
		),
		'output_schema' => array(
			'type' => 'object',
		),
		'permission_callback' => '__return_true',
		'annotations' => array(
			'readonly' => true,
			'destructive' => false,
		),
	) );
}
