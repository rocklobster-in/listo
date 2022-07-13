<?php
/**
 * Subdivisions of Bolivia based on ISO 3166-2:BO standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:BO
 */

class Listo_BO_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'c' => _x( 'Cochabamba', 'bo_subdivisions', 'listo' ),
			'h' => _x( 'Chuquisaca', 'bo_subdivisions', 'listo' ),
			'b' => _x( 'El Beni', 'bo_subdivisions', 'listo' ),
			'l' => _x( 'La Paz', 'bo_subdivisions', 'listo' ),
			'o' => _x( 'Oruro', 'bo_subdivisions', 'listo' ),
			'n' => _x( 'Pando', 'bo_subdivisions', 'listo' ),
			'p' => _x( 'Potosí', 'bo_subdivisions', 'listo' ),
			's' => _x( 'Santa Cruz', 'bo_subdivisions', 'listo' ),
			't' => _x( 'Tarija', 'bo_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
