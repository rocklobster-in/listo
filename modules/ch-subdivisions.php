<?php
/**
 * The list of subdivisions of Switzerland based on ISO 3166-2:CH standard.
 *
 * Source: https://en.wikipedia.org/wiki/ISO_3166-2:CH ISO 3166-2:CH
 */
class Listo_CH_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'AG' => _x( 'Aargau','ch_subdivisions','listo' ),
			'AI' => _x( 'Appenzell Innerrhoden','ch_subdivisions','listo' ),
			'AR' => _x( 'Appenzell Ausserrhoden','ch_subdivisions','listo' ),
			'BE' => _x( 'Bern','ch_subdivisions','listo' ),
			'BL' => _x( 'Basel-Land','ch_subdivisions','listo' ),
			'BS' => _x( 'Basel-Stadt','ch_subdivisions','listo' ),
			'FR' => _x( 'Freiburg','ch_subdivisions','listo' ),
			'GE' => _x( 'Genf','ch_subdivisions','listo' ),
			'GL' => _x( 'Glarus','ch_subdivisions','listo' ),
			'GR' => _x( 'Graubünden','ch_subdivisions','listo' ),
			'JU' => _x( 'Jura','ch_subdivisions','listo' ),
			'LU' => _x( 'Luzern','ch_subdivisions','listo' ),
			'NE' => _x( 'Neuenburg','ch_subdivisions','listo' ),
			'NW' => _x( 'Nidwalden','ch_subdivisions','listo' ),
			'OW' => _x( 'Obwalden','ch_subdivisions','listo' ),
			'SZ' => _x( 'Schwyz','ch_subdivisions','listo' ),
			'SO' => _x( 'Solothurn','ch_subdivisions','listo' ),
			'SH' => _x( 'Schaffhausen','ch_subdivisions','listo' ),
			'SG' => _x( 'St.Gallen','ch_subdivisions','listo' ),
			'TG' => _x( 'Thurgau','ch_subdivisions','listo' ),
			'TI' => _x( 'Tessin','ch_subdivisions','listo' ),
			'UR' => _x( 'Uri','ch_subdivisions','listo' ),
			'VD' => _x( 'Waadt','ch_subdivisions','listo' ),
			'VS' => _x( 'Wallis','ch_subdivisions','listo' ),
			'ZG' => _x( 'Zug','ch_subdivisions','listo' ),
			'ZH' => _x( 'Zürich','ch_subdivisions','listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
