<?php
/**
 * Subdivisions of Cuba based on ISO 3166-2:CU standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:CU
 */

class Listo_CU_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'15' => _x( 'Artemisa', 'cu_subdivisions', 'listo' ),
			'09' => _x( 'Camagüey', 'cu_subdivisions', 'listo' ),
			'08' => _x( 'Ciego de Ávila', 'cu_subdivisions', 'listo' ),
			'06' => _x( 'Cienfuegos', 'cu_subdivisions', 'listo' ),
			'12' => _x( 'Granma', 'cu_subdivisions', 'listo' ),
			'14' => _x( 'Guantánamo', 'cu_subdivisions', 'listo' ),
			'11' => _x( 'Holguín', 'cu_subdivisions', 'listo' ),
			'99' => _x( 'Isla de la Juventud', 'cu_subdivisions', 'listo' ),
			'03' => _x( 'La Habana', 'cu_subdivisions', 'listo' ),
			'10' => _x( 'Las Tunas', 'cu_subdivisions', 'listo' ),
			'04' => _x( 'Matanzas', 'cu_subdivisions', 'listo' ),
			'16' => _x( 'Mayabeque', 'cu_subdivisions', 'listo' ),
			'01' => _x( 'Pinar del Río', 'cu_subdivisions', 'listo' ),
			'07' => _x( 'Sancti Spíritus', 'cu_subdivisions', 'listo' ),
			'13' => _x( 'Santiago de Cuba', 'cu_subdivisions', 'listo' ),
			'05' => _x( 'Villa Clara', 'cu_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'special_municipality' => array( '99' ),
			'provinces' => array( '15', '09', '08', '06', '12', '14',
				'11', '03', '10', '04', '16', '01', '07', '13', '05',
			),
		);
	}
}
