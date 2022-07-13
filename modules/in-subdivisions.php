<?php
/**
 * Subdivisions of India based on ISO 3166-2:IN standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:IN
 */

class Listo_IN_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ap' => _x( "Andhra Pradesh", 'in_subdivisions', 'listo' ),
			'ar' => _x( "Arunachal Pradesh", 'in_subdivisions', 'listo' ),
			'as' => _x( "Assam", 'in_subdivisions', 'listo' ),
			'br' => _x( "Bihar", 'in_subdivisions', 'listo' ),
			'ct' => _x( "Chhattisgarh", 'in_subdivisions', 'listo' ),
			'ga' => _x( "Goa", 'in_subdivisions', 'listo' ),
			'gj' => _x( "Gujarat", 'in_subdivisions', 'listo' ),
			'hr' => _x( "Haryana", 'in_subdivisions', 'listo' ),
			'hp' => _x( "Himachal Pradesh", 'in_subdivisions', 'listo' ),
			'jk' => _x( "Jammu and Kashmir", 'in_subdivisions', 'listo' ),
			'jh' => _x( "Jharkhand", 'in_subdivisions', 'listo' ),
			'ka' => _x( "Karnataka", 'in_subdivisions', 'listo' ),
			'kl' => _x( "Kerala", 'in_subdivisions', 'listo' ),
			'mp' => _x( "Madhya Pradesh", 'in_subdivisions', 'listo' ),
			'mh' => _x( "Maharashtra", 'in_subdivisions', 'listo' ),
			'mn' => _x( "Manipur", 'in_subdivisions', 'listo' ),
			'ml' => _x( "Meghalaya", 'in_subdivisions', 'listo' ),
			'mz' => _x( "Mizoram", 'in_subdivisions', 'listo' ),
			'nl' => _x( "Nagaland", 'in_subdivisions', 'listo' ),
			'or' => _x( "Odisha", 'in_subdivisions', 'listo' ),
			'pb' => _x( "Punjab", 'in_subdivisions', 'listo' ),
			'rj' => _x( "Rajasthan", 'in_subdivisions', 'listo' ),
			'sk' => _x( "Sikkim", 'in_subdivisions', 'listo' ),
			'tn' => _x( "Tamil Nadu", 'in_subdivisions', 'listo' ),
			'tg' => _x( "Telangana", 'in_subdivisions', 'listo' ),
			'tr' => _x( "Tripura", 'in_subdivisions', 'listo' ),
			'ut' => _x( "Uttarakhand", 'in_subdivisions', 'listo' ),
			'up' => _x( "Uttar Pradesh", 'in_subdivisions', 'listo' ),
			'wb' => _x( "West Bengal", 'in_subdivisions', 'listo' ),
			'an' => _x( "Andaman and Nicobar Islands", 'in_subdivisions', 'listo' ),
			'ch' => _x( "Chandigarh", 'in_subdivisions', 'listo' ),
			'dn' => _x( "Dadra and Nagar Haveli", 'in_subdivisions', 'listo' ),
			'dd' => _x( "Daman and Diu", 'in_subdivisions', 'listo' ),
			'dl' => _x( "Delhi", 'in_subdivisions', 'listo' ),
			'ld' => _x( "Lakshadweep", 'in_subdivisions', 'listo' ),
			'py' => _x( "Puducherry", 'in_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'states' => array(
				'ap', 'ar', 'as', 'br', 'ct', 'ga', 'gj', 'hr', 'hp', 'jk', 'jh',
				'ka', 'kl', 'mp', 'mh', 'mn', 'ml', 'mz', 'nl', 'or', 'pb', 'rj',
				'sk', 'tn', 'tg', 'tr', 'ut', 'up', 'wb',
			),
			'union_territories' => array(
				'an', 'ch', 'dn', 'dd', 'dl', 'ld', 'py',
			),
		);
	}
}
