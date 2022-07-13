<?php
/**
 * Subdivisions of Brazil based on ISO 3166-2:BR standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:BR
 */

class Listo_BR_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ac' => _x( 'Acre', 'br_subdivisions', 'listo' ),
			'al' => _x( 'Alagoas', 'br_subdivisions', 'listo' ),
			'ap' => _x( 'Amapá', 'br_subdivisions', 'listo' ),
			'am' => _x( 'Amazonas', 'br_subdivisions', 'listo' ),
			'ba' => _x( 'Bahia', 'br_subdivisions', 'listo' ),
			'ce' => _x( 'Ceará', 'br_subdivisions', 'listo' ),
			'df' => _x( 'Distrito Federal', 'br_subdivisions', 'listo' ),
			'es' => _x( 'Espírito Santo', 'br_subdivisions', 'listo' ),
			'go' => _x( 'Goiás', 'br_subdivisions', 'listo' ),
			'ma' => _x( 'Maranhão', 'br_subdivisions', 'listo' ),
			'mt' => _x( 'Mato Grosso', 'br_subdivisions', 'listo' ),
			'ms' => _x( 'Mato Grosso do Sul', 'br_subdivisions', 'listo' ),
			'mg' => _x( 'Minas Gerais', 'br_subdivisions', 'listo' ),
			'pa' => _x( 'Pará', 'br_subdivisions', 'listo' ),
			'pb' => _x( 'Paraíba', 'br_subdivisions', 'listo' ),
			'pr' => _x( 'Paraná', 'br_subdivisions', 'listo' ),
			'pe' => _x( 'Pernambuco', 'br_subdivisions', 'listo' ),
			'pi' => _x( 'Piauí', 'br_subdivisions', 'listo' ),
			'rj' => _x( 'Rio de Janeiro', 'br_subdivisions', 'listo' ),
			'rn' => _x( 'Rio Grande do Norte', 'br_subdivisions', 'listo' ),
			'rs' => _x( 'Rio Grande do Sul', 'br_subdivisions', 'listo' ),
			'ro' => _x( 'Rondônia', 'br_subdivisions', 'listo' ),
			'rr' => _x( 'Roraima', 'br_subdivisions', 'listo' ),
			'sc' => _x( 'Santa Catarina', 'br_subdivisions', 'listo' ),
			'sp' => _x( 'São Paulo', 'br_subdivisions', 'listo' ),
			'se' => _x( 'Sergipe', 'br_subdivisions', 'listo' ),
			'to' => _x( 'Tocantins', 'br_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'federal_district' => array( 'df' ),
			'states' => array( 'ac', 'al', 'ap', 'am', 'ba', 'ce',
				'es', 'go', 'ma', 'mt', 'ms', 'mg', 'pa', 'pb', 'pr',
				'pe', 'pi', 'rj', 'rn', 'rs', 'ro', 'rr', 'sc', 'sp',
				'se', 'to',
			),
		);
	}
}
