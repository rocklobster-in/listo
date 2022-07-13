<?php
/**
 * Subdivisions of Argentina based on ISO 3166-2:AR standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:AR
 */

class Listo_AR_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'b' => _x( 'Buenos Aires', 'ar_subdivisions', 'listo' ),
			'k' => _x( 'Catamarca', 'ar_subdivisions', 'listo' ),
			'h' => _x( 'Chaco', 'ar_subdivisions', 'listo' ),
			'u' => _x( 'Chubut', 'ar_subdivisions', 'listo' ),
			'c' => _x( 'Ciudad Autónoma de Buenos Aires', 'ar_subdivisions', 'listo' ),
			'x' => _x( 'Córdoba', 'ar_subdivisions', 'listo' ),
			'w' => _x( 'Corrientes', 'ar_subdivisions', 'listo' ),
			'e' => _x( 'Entre Ríos', 'ar_subdivisions', 'listo' ),
			'p' => _x( 'Formosa', 'ar_subdivisions', 'listo' ),
			'y' => _x( 'Jujuy', 'ar_subdivisions', 'listo' ),
			'l' => _x( 'La Pampa', 'ar_subdivisions', 'listo' ),
			'f' => _x( 'La Rioja', 'ar_subdivisions', 'listo' ),
			'm' => _x( 'Mendoza', 'ar_subdivisions', 'listo' ),
			'n' => _x( 'Misiones', 'ar_subdivisions', 'listo' ),
			'q' => _x( 'Neuquén', 'ar_subdivisions', 'listo' ),
			'r' => _x( 'Río Negro', 'ar_subdivisions', 'listo' ),
			'a' => _x( 'Salta', 'ar_subdivisions', 'listo' ),
			'j' => _x( 'San Juan', 'ar_subdivisions', 'listo' ),
			'd' => _x( 'San Luis', 'ar_subdivisions', 'listo' ),
			'z' => _x( 'Santa Cruz', 'ar_subdivisions', 'listo' ),
			's' => _x( 'Santa Fe', 'ar_subdivisions', 'listo' ),
			'g' => _x( 'Santiago del Estero', 'ar_subdivisions', 'listo' ),
			'v' => _x( 'Tierra del Fuego', 'ar_subdivisions', 'listo' ),
			't' => _x( 'Tucumán', 'ar_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'city' => array( 'c' ),
			'provinces' => array( 'b', 'k', 'h', 'u', 'x', 'w',
				'e', 'p', 'y', 'l', 'f', 'm', 'n', 'q', 'r', 'a',
				'j', 'd', 'z', 's', 'g', 'v', 't',
			),
		);
	}
}
