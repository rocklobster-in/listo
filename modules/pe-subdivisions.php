<?php
/**
 * Subdivisions of Peru based on ISO 3166-2:PE standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:PE
 */

class Listo_PE_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ama' => _x( 'Amazonas', 'pe_subdivisions', 'listo' ),
			'anc' => _x( 'Ancash', 'pe_subdivisions', 'listo' ),
			'apu' => _x( 'Apurímac', 'pe_subdivisions', 'listo' ),
			'are' => _x( 'Arequipa', 'pe_subdivisions', 'listo' ),
			'aya' => _x( 'Ayacucho', 'pe_subdivisions', 'listo' ),
			'caj' => _x( 'Cajamarca', 'pe_subdivisions', 'listo' ),
			'cus' => _x( 'Cuzco', 'pe_subdivisions', 'listo' ),
			'cal' => _x( 'El Callao', 'pe_subdivisions', 'listo' ),
			'huv' => _x( 'Huancavelica', 'pe_subdivisions', 'listo' ),
			'huc' => _x( 'Huánuco', 'pe_subdivisions', 'listo' ),
			'ica' => _x( 'Ica', 'pe_subdivisions', 'listo' ),
			'jun' => _x( 'Junín', 'pe_subdivisions', 'listo' ),
			'lal' => _x( 'La Libertad', 'pe_subdivisions', 'listo' ),
			'lam' => _x( 'Lambayeque', 'pe_subdivisions', 'listo' ),
			'lim' => _x( 'Lima', 'pe_subdivisions', 'listo' ),
			'lor' => _x( 'Loreto', 'pe_subdivisions', 'listo' ),
			'mdd' => _x( 'Madre de Dios', 'pe_subdivisions', 'listo' ),
			'moq' => _x( 'Moquegua', 'pe_subdivisions', 'listo' ),
			'lma' => _x( 'Municipalidad Metropolitana de Lima', 'pe_subdivisions', 'listo' ),
			'pas' => _x( 'Pasco', 'pe_subdivisions', 'listo' ),
			'piu' => _x( 'Piura', 'pe_subdivisions', 'listo' ),
			'pun' => _x( 'Puno', 'pe_subdivisions', 'listo' ),
			'sam' => _x( 'San Martín', 'pe_subdivisions', 'listo' ),
			'tac' => _x( 'Tacna', 'pe_subdivisions', 'listo' ),
			'tum' => _x( 'Tumbes', 'pe_subdivisions', 'listo' ),
			'uca' => _x( 'Ucayali', 'pe_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'municipality' => array( 'lma' ),
			'regions' => array( 'ama', 'anc', 'apu', 'are', 'aya', 'caj', 'cus',
				'cal', 'huv', 'huc', 'ica', 'jun', 'lal', 'lam', 'lim', 'lor', 'mdd',
				'moq', 'pas', 'piu', 'pun', 'sam', 'tac', 'tum', 'uca',
			),
		);
	}
}
