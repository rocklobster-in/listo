<?php
/**
 * Subdivisions of Ecuador based on ISO 3166-2:EC standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:EC
 */

class Listo_EC_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'a' => _x( 'Azuay', 'ec_subdivisions', 'listo' ),
			'b' => _x( 'Bolívar', 'ec_subdivisions', 'listo' ),
			'f' => _x( 'Cañar', 'ec_subdivisions', 'listo' ),
			'c' => _x( 'Carchi', 'ec_subdivisions', 'listo' ),
			'h' => _x( 'Chimborazo', 'ec_subdivisions', 'listo' ),
			'x' => _x( 'Cotopaxi', 'ec_subdivisions', 'listo' ),
			'o' => _x( 'El Oro', 'ec_subdivisions', 'listo' ),
			'e' => _x( 'Esmeraldas', 'ec_subdivisions', 'listo' ),
			'w' => _x( 'Galápagos', 'ec_subdivisions', 'listo' ),
			'g' => _x( 'Guayas', 'ec_subdivisions', 'listo' ),
			'i' => _x( 'Imbabura', 'ec_subdivisions', 'listo' ),
			'l' => _x( 'Loja', 'ec_subdivisions', 'listo' ),
			'r' => _x( 'Los Ríos', 'ec_subdivisions', 'listo' ),
			'm' => _x( 'Manabí', 'ec_subdivisions', 'listo' ),
			's' => _x( 'Morona Santiago', 'ec_subdivisions', 'listo' ),
			'n' => _x( 'Napo', 'ec_subdivisions', 'listo' ),
			'd' => _x( 'Orellana', 'ec_subdivisions', 'listo' ),
			'y' => _x( 'Pastaza', 'ec_subdivisions', 'listo' ),
			'p' => _x( 'Pichincha', 'ec_subdivisions', 'listo' ),
			'se' => _x( 'Santa Elena', 'ec_subdivisions', 'listo' ),
			'sd' => _x( 'Santo Domingo de los Tsáchilas', 'ec_subdivisions', 'listo' ),
			'u' => _x( 'Sucumbíos', 'ec_subdivisions', 'listo' ),
			't' => _x( 'Tungurahua', 'ec_subdivisions', 'listo' ),
			'z' => _x( 'Zamora Chinchipe', 'ec_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
