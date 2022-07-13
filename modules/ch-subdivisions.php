<?php
/**
 * Subdivisions of Switzerland based on ISO 3166-2:CH standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:CH
 */

class Listo_CH_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ag' => _x( 'Aargau', 'ch_subdivisions', 'listo' ),
			'ar' => _x( 'Appenzell Ausserrhoden', 'ch_subdivisions', 'listo' ),
			'ai' => _x( 'Appenzell Innerrhoden', 'ch_subdivisions', 'listo' ),
			'bl' => _x( 'Basel-Landschaft', 'ch_subdivisions', 'listo' ),
			'bs' => _x( 'Basel-Stadt', 'ch_subdivisions', 'listo' ),
			'be' => _x( 'Bern', 'ch_subdivisions', 'listo' ),
			'fr' => _x( 'Fribourg', 'ch_subdivisions', 'listo' ),
			'ge' => _x( 'Genève', 'ch_subdivisions', 'listo' ),
			'gl' => _x( 'Glarus', 'ch_subdivisions', 'listo' ),
			'gr' => _x( 'Graubünden', 'ch_subdivisions', 'listo' ),
			'ju' => _x( 'Jura', 'ch_subdivisions', 'listo' ),
			'lu' => _x( 'Luzern', 'ch_subdivisions', 'listo' ),
			'ne' => _x( 'Neuchâtel', 'ch_subdivisions', 'listo' ),
			'nw' => _x( 'Nidwalden', 'ch_subdivisions', 'listo' ),
			'ow' => _x( 'Obwalden', 'ch_subdivisions', 'listo' ),
			'sg' => _x( 'Sankt Gallen', 'ch_subdivisions', 'listo' ),
			'sh' => _x( 'Schaffhausen', 'ch_subdivisions', 'listo' ),
			'sz' => _x( 'Schwyz', 'ch_subdivisions', 'listo' ),
			'so' => _x( 'Solothurn', 'ch_subdivisions', 'listo' ),
			'tg' => _x( 'Thurgau', 'ch_subdivisions', 'listo' ),
			'ti' => _x( 'Ticino', 'ch_subdivisions', 'listo' ),
			'ur' => _x( 'Uri', 'ch_subdivisions', 'listo' ),
			'vs' => _x( 'Valais', 'ch_subdivisions', 'listo' ),
			'vd' => _x( 'Vaud', 'ch_subdivisions', 'listo' ),
			'zg' => _x( 'Zug', 'ch_subdivisions', 'listo' ),
			'zh' => _x( 'Zürich', 'ch_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
