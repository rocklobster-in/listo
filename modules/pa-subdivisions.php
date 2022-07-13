<?php
/**
 * Subdivisions of Panama based on ISO 3166-2:PA standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:PA
 */

class Listo_PA_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'1' => _x( 'Bocas del Toro', 'pa_subdivisions', 'listo' ),
			'4' => _x( 'Chiriquí', 'pa_subdivisions', 'listo' ),
			'2' => _x( 'Coclé', 'pa_subdivisions', 'listo' ),
			'3' => _x( 'Colón', 'pa_subdivisions', 'listo' ),
			'5' => _x( 'Darién', 'pa_subdivisions', 'listo' ),
			'em' => _x( 'Emberá', 'pa_subdivisions', 'listo' ),
			'ky' => _x( 'Guna Yala', 'pa_subdivisions', 'listo' ),
			'6' => _x( 'Herrera', 'pa_subdivisions', 'listo' ),
			'7' => _x( 'Los Santos', 'pa_subdivisions', 'listo' ),
			'nb' => _x( 'Ngöbe-Buglé', 'pa_subdivisions', 'listo' ),
			'8' => _x( 'Panamá', 'pa_subdivisions', 'listo' ),
			'10' => _x( 'Panamá Oeste', 'pa_subdivisions', 'listo' ),
			'9' => _x( 'Veraguas', 'pa_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'provinces' => array( '1', '4', '2', '3', '5', '6', '7', '8', '10', '9' ),
			'indigenous_regions' => array( 'em', 'ky', 'nb' ),
		);
	}
}
