<?php
/**
 * Subdivisions of El Salvador based on ISO 3166-2:SV standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:SV
 */

class Listo_SV_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ah' => _x( 'Ahuachapán', 'sv_subdivisions', 'listo' ),
			'ca' => _x( 'Cabañas', 'sv_subdivisions', 'listo' ),
			'ch' => _x( 'Chalatenango', 'sv_subdivisions', 'listo' ),
			'cu' => _x( 'Cuscatlán', 'sv_subdivisions', 'listo' ),
			'li' => _x( 'La Libertad', 'sv_subdivisions', 'listo' ),
			'pa' => _x( 'La Paz', 'sv_subdivisions', 'listo' ),
			'un' => _x( 'La Unión', 'sv_subdivisions', 'listo' ),
			'mo' => _x( 'Morazán', 'sv_subdivisions', 'listo' ),
			'sm' => _x( 'San Miguel', 'sv_subdivisions', 'listo' ),
			'ss' => _x( 'San Salvador', 'sv_subdivisions', 'listo' ),
			'sv' => _x( 'San Vicente', 'sv_subdivisions', 'listo' ),
			'sa' => _x( 'Santa Ana', 'sv_subdivisions', 'listo' ),
			'so' => _x( 'Sonsonate', 'sv_subdivisions', 'listo' ),
			'us' => _x( 'Usulután', 'sv_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
