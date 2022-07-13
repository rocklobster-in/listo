<?php
/**
 * Subdivisions of Venezuela based on ISO 3166-2:VE standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:VE
 */

class Listo_VE_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'z' => _x( 'Amazonas', 've_subdivisions', 'listo' ),
			'b' => _x( 'Anzoátegui', 've_subdivisions', 'listo' ),
			'c' => _x( 'Apure', 've_subdivisions', 'listo' ),
			'd' => _x( 'Aragua', 've_subdivisions', 'listo' ),
			'e' => _x( 'Barinas', 've_subdivisions', 'listo' ),
			'f' => _x( 'Bolívar', 've_subdivisions', 'listo' ),
			'g' => _x( 'Carabobo', 've_subdivisions', 'listo' ),
			'h' => _x( 'Cojedes', 've_subdivisions', 'listo' ),
			'y' => _x( 'Delta Amacuro', 've_subdivisions', 'listo' ),
			'w' => _x( 'Dependencias Federales', 've_subdivisions', 'listo' ),
			'a' => _x( 'Distrito Capital', 've_subdivisions', 'listo' ),
			'i' => _x( 'Falcón', 've_subdivisions', 'listo' ),
			'j' => _x( 'Guárico', 've_subdivisions', 'listo' ),
			'k' => _x( 'Lara', 've_subdivisions', 'listo' ),
			'l' => _x( 'Mérida', 've_subdivisions', 'listo' ),
			'm' => _x( 'Miranda', 've_subdivisions', 'listo' ),
			'n' => _x( 'Monagas', 've_subdivisions', 'listo' ),
			'o' => _x( 'Nueva Esparta', 've_subdivisions', 'listo' ),
			'p' => _x( 'Portuguesa', 've_subdivisions', 'listo' ),
			'r' => _x( 'Sucre', 've_subdivisions', 'listo' ),
			's' => _x( 'Táchira', 've_subdivisions', 'listo' ),
			't' => _x( 'Trujillo', 've_subdivisions', 'listo' ),
			'x' => _x( 'Vargas', 've_subdivisions', 'listo' ),
			'u' => _x( 'Yaracuy', 've_subdivisions', 'listo' ),
			'v' => _x( 'Zulia', 've_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'capital_district' => array( 'a' ),
			'federal_dependency' => array( 'w' ),
			'states' => array( 'z', 'b', 'c', 'd', 'e', 'f',
				'g', 'h', 'y', 'i', 'j', 'k', 'l', 'm', 'n', 'o',
				'p', 'r', 's', 't', 'x', 'u', 'v',
			),
		);
	}
}
