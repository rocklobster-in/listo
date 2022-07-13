<?php
/**
 * Subdivisions of Colombia based on ISO 3166-2:CO standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:CO
 */

class Listo_CO_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ama' => _x( 'Amazonas', 'co_subdivisions', 'listo' ),
			'ant' => _x( 'Antioquia', 'co_subdivisions', 'listo' ),
			'ara' => _x( 'Arauca', 'co_subdivisions', 'listo' ),
			'atl' => _x( 'Atlántico', 'co_subdivisions', 'listo' ),
			'dc' => _x( 'Bogotá', 'co_subdivisions', 'listo' ),
			'bol' => _x( 'Bolívar', 'co_subdivisions', 'listo' ),
			'boy' => _x( 'Boyacá', 'co_subdivisions', 'listo' ),
			'cho' => _x( 'Chocó', 'co_subdivisions', 'listo' ),
			'cal' => _x( 'Caldas', 'co_subdivisions', 'listo' ),
			'caq' => _x( 'Caquetá', 'co_subdivisions', 'listo' ),
			'cas' => _x( 'Casanare', 'co_subdivisions', 'listo' ),
			'cau' => _x( 'Cauca', 'co_subdivisions', 'listo' ),
			'ces' => _x( 'Cesar', 'co_subdivisions', 'listo' ),
			'cor' => _x( 'Córdoba', 'co_subdivisions', 'listo' ),
			'cun' => _x( 'Cundinamarca', 'co_subdivisions', 'listo' ),
			'gua' => _x( 'Guainía', 'co_subdivisions', 'listo' ),
			'guv' => _x( 'Guaviare', 'co_subdivisions', 'listo' ),
			'hui' => _x( 'Huila', 'co_subdivisions', 'listo' ),
			'lag' => _x( 'La Guajira', 'co_subdivisions', 'listo' ),
			'mag' => _x( 'Magdalena', 'co_subdivisions', 'listo' ),
			'met' => _x( 'Meta', 'co_subdivisions', 'listo' ),
			'nar' => _x( 'Nariño', 'co_subdivisions', 'listo' ),
			'nsa' => _x( 'Norte de Santander', 'co_subdivisions', 'listo' ),
			'put' => _x( 'Putumayo', 'co_subdivisions', 'listo' ),
			'qui' => _x( 'Quindío', 'co_subdivisions', 'listo' ),
			'ris' => _x( 'Risaralda', 'co_subdivisions', 'listo' ),
			'sap' => _x( 'San Andrés, Providencia y Santa Catalina', 'co_subdivisions', 'listo' ),
			'san' => _x( 'Santander', 'co_subdivisions', 'listo' ),
			'suc' => _x( 'Sucre', 'co_subdivisions', 'listo' ),
			'tol' => _x( 'Tolima', 'co_subdivisions', 'listo' ),
			'vac' => _x( 'Valle del Cauca', 'co_subdivisions', 'listo' ),
			'vau' => _x( 'Vaupés', 'co_subdivisions', 'listo' ),
			'vid' => _x( 'Vichada', 'co_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'capital_district' => array( 'dc' ),
			'departments' => array( 'ama', 'ant', 'ara', 'atl', 'bol', 'boy',
				'cho', 'cal', 'caq', 'cas', 'cau', 'ces', 'cor', 'cun', 'gua',
				'guv', 'hui', 'lag', 'mag', 'met', 'nar', 'nsa', 'put', 'qui',
				'ris', 'sap', 'san', 'suc', 'tol', 'vac', 'vau', 'vid',
			),
		);
	}
}
