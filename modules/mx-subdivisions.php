<?php
/**
 * Subdivisions of Mexico based on ISO 3166-2:MX standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:MX
 */

class Listo_MX_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'agu' => _x( 'Aguascalientes', 'mx_subdivisions', 'listo' ),
			'bcn' => _x( 'Baja California', 'mx_subdivisions', 'listo' ),
			'bcs' => _x( 'Baja California Sur', 'mx_subdivisions', 'listo' ),
			'cam' => _x( 'Campeche', 'mx_subdivisions', 'listo' ),
			'chp' => _x( 'Chiapas', 'mx_subdivisions', 'listo' ),
			'chh' => _x( 'Chihuahua', 'mx_subdivisions', 'listo' ),
			'cmx' => _x( 'Ciudad de México', 'mx_subdivisions', 'listo' ),
			'coa' => _x( 'Coahuila', 'mx_subdivisions', 'listo' ),
			'col' => _x( 'Colima', 'mx_subdivisions', 'listo' ),
			'dur' => _x( 'Durango', 'mx_subdivisions', 'listo' ),
			'gua' => _x( 'Guanajuato', 'mx_subdivisions', 'listo' ),
			'gro' => _x( 'Guerrero', 'mx_subdivisions', 'listo' ),
			'hid' => _x( 'Hidalgo', 'mx_subdivisions', 'listo' ),
			'jal' => _x( 'Jalisco', 'mx_subdivisions', 'listo' ),
			'mic' => _x( 'Michoacán', 'mx_subdivisions', 'listo' ),
			'mor' => _x( 'Morelos', 'mx_subdivisions', 'listo' ),
			'mex' => _x( 'México', 'mx_subdivisions', 'listo' ),
			'nay' => _x( 'Nayarit', 'mx_subdivisions', 'listo' ),
			'nle' => _x( 'Nuevo León', 'mx_subdivisions', 'listo' ),
			'oax' => _x( 'Oaxaca', 'mx_subdivisions', 'listo' ),
			'pue' => _x( 'Puebla', 'mx_subdivisions', 'listo' ),
			'que' => _x( 'Querétaro', 'mx_subdivisions', 'listo' ),
			'roo' => _x( 'Quintana Roo', 'mx_subdivisions', 'listo' ),
			'slp' => _x( 'San Luis Potosí', 'mx_subdivisions', 'listo' ),
			'sin' => _x( 'Sinaloa', 'mx_subdivisions', 'listo' ),
			'son' => _x( 'Sonora', 'mx_subdivisions', 'listo' ),
			'tab' => _x( 'Tabasco', 'mx_subdivisions', 'listo' ),
			'tam' => _x( 'Tamaulipas', 'mx_subdivisions', 'listo' ),
			'tla' => _x( 'Tlaxcala', 'mx_subdivisions', 'listo' ),
			'ver' => _x( 'Veracruz', 'mx_subdivisions', 'listo' ),
			'yuc' => _x( 'Yucatán', 'mx_subdivisions', 'listo' ),
			'zac' => _x( 'Zacatecas', 'mx_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'capital' => array( 'cmx' ),
			'states' => array( 'agu', 'bcn', 'bcs', 'cam', 'chp', 'chh',
				'coa', 'col', 'dur', 'gua', 'gro', 'hid', 'jal', 'mic', 'mor',
				'mex', 'nay', 'nle', 'oax', 'pue', 'que', 'roo', 'slp', 'sin',
				'son', 'tab', 'tam', 'tla', 'ver', 'yuc', 'zac',
			),
		);
	}
}
