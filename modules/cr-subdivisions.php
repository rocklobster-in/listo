<?php
/**
 * Subdivisions of Costa Rica based on ISO 3166-2:CR standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:CR
 */

class Listo_CR_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'a' => _x( 'Alajuela', 'cr_subdivisions', 'listo' ),
			'c' => _x( 'Cartago', 'cr_subdivisions', 'listo' ),
			'g' => _x( 'Guanacaste', 'cr_subdivisions', 'listo' ),
			'h' => _x( 'Heredia', 'cr_subdivisions', 'listo' ),
			'l' => _x( 'Limón', 'cr_subdivisions', 'listo' ),
			'p' => _x( 'Puntarenas', 'cr_subdivisions', 'listo' ),
			'sj' => _x( 'San José', 'cr_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
