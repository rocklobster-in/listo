<?php
/**
 * Subdivisions of Honduras based on ISO 3166-2:HN standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:HN
 */

class Listo_HN_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'at' => _x( 'Atlántida', 'hn_subdivisions', 'listo' ),
			'ch' => _x( 'Choluteca', 'hn_subdivisions', 'listo' ),
			'cl' => _x( 'Colón', 'hn_subdivisions', 'listo' ),
			'cm' => _x( 'Comayagua', 'hn_subdivisions', 'listo' ),
			'cp' => _x( 'Copán', 'hn_subdivisions', 'listo' ),
			'cr' => _x( 'Cortés', 'hn_subdivisions', 'listo' ),
			'ep' => _x( 'El Paraíso', 'hn_subdivisions', 'listo' ),
			'fm' => _x( 'Francisco Morazán', 'hn_subdivisions', 'listo' ),
			'gd' => _x( 'Gracias a Dios', 'hn_subdivisions', 'listo' ),
			'in' => _x( 'Intibucá', 'hn_subdivisions', 'listo' ),
			'ib' => _x( 'Islas de la Bahía', 'hn_subdivisions', 'listo' ),
			'lp' => _x( 'La Paz', 'hn_subdivisions', 'listo' ),
			'le' => _x( 'Lempira', 'hn_subdivisions', 'listo' ),
			'oc' => _x( 'Ocotepeque', 'hn_subdivisions', 'listo' ),
			'ol' => _x( 'Olancho', 'hn_subdivisions', 'listo' ),
			'sb' => _x( 'Santa Bárbara', 'hn_subdivisions', 'listo' ),
			'va' => _x( 'Valle', 'hn_subdivisions', 'listo' ),
			'yo' => _x( 'Yoro', 'hn_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
