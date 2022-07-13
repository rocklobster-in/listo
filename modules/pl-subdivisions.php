<?php
/**
 * Subdivisions of Poland based on ISO 3166-2:PL standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:PL
 */

class Listo_PL_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'02' => _x( 'Dolnośląskie', 'pl_subdivisions', 'listo' ),
			'04' => _x( 'Kujawsko-pomorskie', 'pl_subdivisions', 'listo' ),
			'06' => _x( 'Lubelskie', 'pl_subdivisions', 'listo' ),
			'08' => _x( 'Lubuskie', 'pl_subdivisions', 'listo' ),
			'10' => _x( 'Łódzkie', 'pl_subdivisions', 'listo' ),
			'12' => _x( 'Małopolskie', 'pl_subdivisions', 'listo' ),
			'14' => _x( 'Mazowieckie', 'pl_subdivisions', 'listo' ),
			'16' => _x( 'Opolskie', 'pl_subdivisions', 'listo' ),
			'18' => _x( 'Podkarpackie', 'pl_subdivisions', 'listo' ),
			'20' => _x( 'Podlaskie', 'pl_subdivisions', 'listo' ),
			'22' => _x( 'Pomorskie', 'pl_subdivisions', 'listo' ),
			'24' => _x( 'Śląskie', 'pl_subdivisions', 'listo' ),
			'26' => _x( 'Świętokrzyskie', 'pl_subdivisions', 'listo' ),
			'28' => _x( 'Warmińsko-mazurskie', 'pl_subdivisions', 'listo' ),
			'30' => _x( 'Wielkopolskie', 'pl_subdivisions', 'listo' ),
			'32' => _x( 'Zachodniopomorskie', 'pl_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
