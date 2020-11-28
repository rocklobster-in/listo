<?php

add_action( 'rest_api_init', 'listo_rest_api_init', 10, 0 );

function listo_rest_api_init() {
	register_rest_route( 'listo/v1',
		'/(?P<type>[a-z0-9_-]+)',
		array(
			'methods' => WP_REST_Server::READABLE,
			'callback' => 'listo_rest',
			'permission_callback' => '__return_true',
		)
	);
}

function listo_rest( WP_REST_Request $request ) {
	$type = $request->get_param( 'type' );
	$type = str_replace( '-', '_', trim( $type ) );

	$group = $request->get_param( 'group' );
	$group = str_replace( '-', '_', trim( $group ) );

	$locale = $request->get_param( 'locale' );
	$locale = str_replace( '-', '_', trim( $locale ) );

	$args = array(
		'group' => $group,
		'locale' => $locale,
	);

	$items = listo( $type, $args );

	if ( ! $items ) {
		return new WP_Error( 'listo_not_found',
			__( "The requested list was not found.", 'listo' ),
			array( 'status' => 404 )
		);
	}

	return rest_ensure_response( $items );
}
