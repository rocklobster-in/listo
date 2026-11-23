<?php
/**
 * Subdivisions of Nicaragua based on ISO 3166-2:NI standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:NI
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Listo_NI_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'bo' => _x( 'Boaco', 'ni_subdivisions', 'listo' ),
			'ca' => _x( 'Carazo', 'ni_subdivisions', 'listo' ),
			'ci' => _x( 'Chinandega', 'ni_subdivisions', 'listo' ),
			'co' => _x( 'Chontales', 'ni_subdivisions', 'listo' ),
			'an' => _x( 'Costa Caribe Norte', 'ni_subdivisions', 'listo' ),
			'as' => _x( 'Costa Caribe Sur', 'ni_subdivisions', 'listo' ),
			'es' => _x( 'Estelí', 'ni_subdivisions', 'listo' ),
			'gr' => _x( 'Granada', 'ni_subdivisions', 'listo' ),
			'ji' => _x( 'Jinotega', 'ni_subdivisions', 'listo' ),
			'le' => _x( 'León', 'ni_subdivisions', 'listo' ),
			'md' => _x( 'Madriz', 'ni_subdivisions', 'listo' ),
			'mn' => _x( 'Managua', 'ni_subdivisions', 'listo' ),
			'ms' => _x( 'Masaya', 'ni_subdivisions', 'listo' ),
			'mt' => _x( 'Matagalpa', 'ni_subdivisions', 'listo' ),
			'ns' => _x( 'Nueva Segovia', 'ni_subdivisions', 'listo' ),
			'sj' => _x( 'Río San Juan', 'ni_subdivisions', 'listo' ),
			'ri' => _x( 'Rivas', 'ni_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'departments' => array( 'bo', 'ca', 'ci', 'co', 'es', 'gr',
				'ji', 'le', 'md', 'mn', 'ms', 'mt', 'ns', 'sj', 'ri',
			),
			'autonomous_regions' => array( 'an', 'as' ),
		);
	}
}
