<?php
/**
 * Subdivisions of Paraguay based on ISO 3166-2:PY standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:PY
 */

class Listo_PY_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'asu' => _x( 'Asunción', 'py_subdivisions', 'listo' ),
			'11' => _x( 'Central', 'py_subdivisions', 'listo' ),
			'16' => _x( 'Alto Paraguay', 'py_subdivisions', 'listo' ),
			'10' => _x( 'Alto Paraná', 'py_subdivisions', 'listo' ),
			'13' => _x( 'Amambay', 'py_subdivisions', 'listo' ),
			'19' => _x( 'Boquerón', 'py_subdivisions', 'listo' ),
			'5' => _x( 'Caaguazú', 'py_subdivisions', 'listo' ),
			'6' => _x( 'Caazapá', 'py_subdivisions', 'listo' ),
			'14' => _x( 'Canindeyú', 'py_subdivisions', 'listo' ),
			'1' => _x( 'Concepción', 'py_subdivisions', 'listo' ),
			'3' => _x( 'Cordillera', 'py_subdivisions', 'listo' ),
			'4' => _x( 'Guairá', 'py_subdivisions', 'listo' ),
			'7' => _x( 'Itapúa', 'py_subdivisions', 'listo' ),
			'8' => _x( 'Misiones', 'py_subdivisions', 'listo' ),
			'9' => _x( 'Paraguarí', 'py_subdivisions', 'listo' ),
			'15' => _x( 'Presidente Hayes', 'py_subdivisions', 'listo' ),
			'2' => _x( 'San Pedro', 'py_subdivisions', 'listo' ),
			'12' => _x( 'Ñeembucú', 'py_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'capital' => array( 'asu' ),
			'departments' => array( '11', '16', '10', '13', '19',
				'5', '6', '14', '1', '3', '4', '7', '8', '9', '15', '2', '12',
			),
		);
	}
}
