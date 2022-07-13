<?php
/**
 * Subdivisions of Uruguay based on ISO 3166-2:UY standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:UY
 */

class Listo_UY_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ar' => _x( 'Artigas', 'uy_subdivisions', 'listo' ),
			'ca' => _x( 'Canelones', 'uy_subdivisions', 'listo' ),
			'cl' => _x( 'Cerro Largo', 'uy_subdivisions', 'listo' ),
			'co' => _x( 'Colonia', 'uy_subdivisions', 'listo' ),
			'du' => _x( 'Durazno', 'uy_subdivisions', 'listo' ),
			'fs' => _x( 'Flores', 'uy_subdivisions', 'listo' ),
			'fd' => _x( 'Florida', 'uy_subdivisions', 'listo' ),
			'la' => _x( 'Lavalleja', 'uy_subdivisions', 'listo' ),
			'ma' => _x( 'Maldonado', 'uy_subdivisions', 'listo' ),
			'mo' => _x( 'Montevideo', 'uy_subdivisions', 'listo' ),
			'pa' => _x( 'Paysandú', 'uy_subdivisions', 'listo' ),
			'rn' => _x( 'Río Negro', 'uy_subdivisions', 'listo' ),
			'rv' => _x( 'Rivera', 'uy_subdivisions', 'listo' ),
			'ro' => _x( 'Rocha', 'uy_subdivisions', 'listo' ),
			'sa' => _x( 'Salto', 'uy_subdivisions', 'listo' ),
			'sj' => _x( 'San José', 'uy_subdivisions', 'listo' ),
			'so' => _x( 'Soriano', 'uy_subdivisions', 'listo' ),
			'ta' => _x( 'Tacuarembó', 'uy_subdivisions', 'listo' ),
			'tt' => _x( 'Treinta y Tres', 'uy_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
