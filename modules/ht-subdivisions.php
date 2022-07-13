<?php
/**
 * Subdivisions of Haiti based on ISO 3166-2:HT standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:HT
 */

class Listo_HT_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ar' => _x( 'Artibonite', 'ht_subdivisions', 'listo' ),
			'ce' => _x( 'Centre', 'ht_subdivisions', 'listo' ),
			'ga' => _x( 'Grande’Anse', 'ht_subdivisions', 'listo' ),
			'ni' => _x( 'Nippes', 'ht_subdivisions', 'listo' ),
			'nd' => _x( 'Nord', 'ht_subdivisions', 'listo' ),
			'ne' => _x( 'Nord-Est', 'ht_subdivisions', 'listo' ),
			'no' => _x( 'Nord-Ouest', 'ht_subdivisions', 'listo' ),
			'ou' => _x( 'Ouest', 'ht_subdivisions', 'listo' ),
			'sd' => _x( 'Sud', 'ht_subdivisions', 'listo' ),
			'se' => _x( 'Sud-Est', 'ht_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
