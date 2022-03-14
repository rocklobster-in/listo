<?php
/**
 * The list of subdivisions of Poland based on ISO 3166-2:SV standard.
 *
 * Source: https://en.wikipedia.org/wiki/ISO_3166-2:PL
 */
class Listo_PL_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'd' => _x( 'dolnośląskie', 'pl_subdivisions', 'listo' ),
			'c' => _x( 'kujawsko-pomorskie', 'pl_subdivisions', 'listo' ),
			'l' => _x( 'lubelskie', 'pl_subdivisions', 'listo' ),
			'f' => _x( 'lubuskie', 'pl_subdivisions', 'listo' ),
			'e' => _x( 'łódzkie', 'pl_subdivisions', 'listo' ),
			'k' => _x( 'małopolskie', 'pl_subdivisions', 'listo' ),
			'w' => _x( 'mazowieckie', 'pl_subdivisions', 'listo' ),
			'o' => _x( 'opolskie', 'pl_subdivisions', 'listo' ),
			'r' => _x( 'podkarpackie', 'pl_subdivisions', 'listo' ),
			'b' => _x( 'podlaskie', 'pl_subdivisions', 'listo' ),
			'g' => _x( 'pomorskie', 'pl_subdivisions', 'listo' ),
			's' => _x( 'śląskie', 'pl_subdivisions', 'listo' ),
			't' => _x( 'świętokrzyskie', 'pl_subdivisions', 'listo' ),
			'n' => _x( 'warmińsko-mazurskie', 'pl_subdivisions', 'listo' ),
			'p' => _x( 'wielkopolskie', 'pl_subdivisions', 'listo' ),
			'z' => _x( 'zachodniopomorskie', 'pl_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'voivodeships' => array( 'd', 'c', 'l', 'f', 'e', 'k', 'w', 'o',
				'r', 'b', 'g', 's', 't', 'n', 'p', 'z',
			),
		);
	}
}
