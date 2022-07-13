<?php
/**
 * Subdivisions of the United States based on ISO 3166-2:US standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:US
 */

class Listo_US_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ak' => _x( "Alaska", 'us_subdivisions', 'listo' ),
			'al' => _x( "Alabama", 'us_subdivisions', 'listo' ),
			'ar' => _x( "Arkansas", 'us_subdivisions', 'listo' ),
			'as' => _x( "American Samoa", 'us_subdivisions', 'listo' ),
			'az' => _x( "Arizona", 'us_subdivisions', 'listo' ),
			'ca' => _x( "California", 'us_subdivisions', 'listo' ),
			'co' => _x( "Colorado", 'us_subdivisions', 'listo' ),
			'ct' => _x( "Connecticut", 'us_subdivisions', 'listo' ),
			'dc' => _x( "District of Columbia", 'us_subdivisions', 'listo' ),
			'de' => _x( "Delaware", 'us_subdivisions', 'listo' ),
			'fl' => _x( "Florida", 'us_subdivisions', 'listo' ),
			'ga' => _x( "Georgia", 'us_subdivisions', 'listo' ),
			'gu' => _x( "Guam", 'us_subdivisions', 'listo' ),
			'hi' => _x( "Hawaii", 'us_subdivisions', 'listo' ),
			'ia' => _x( "Iowa", 'us_subdivisions', 'listo' ),
			'id' => _x( "Idaho", 'us_subdivisions', 'listo' ),
			'il' => _x( "Illinois", 'us_subdivisions', 'listo' ),
			'in' => _x( "Indiana", 'us_subdivisions', 'listo' ),
			'ks' => _x( "Kansas", 'us_subdivisions', 'listo' ),
			'ky' => _x( "Kentucky", 'us_subdivisions', 'listo' ),
			'la' => _x( "Louisiana", 'us_subdivisions', 'listo' ),
			'ma' => _x( "Massachusetts", 'us_subdivisions', 'listo' ),
			'md' => _x( "Maryland", 'us_subdivisions', 'listo' ),
			'me' => _x( "Maine", 'us_subdivisions', 'listo' ),
			'mi' => _x( "Michigan", 'us_subdivisions', 'listo' ),
			'mn' => _x( "Minnesota", 'us_subdivisions', 'listo' ),
			'mo' => _x( "Missouri", 'us_subdivisions', 'listo' ),
			'mp' => _x( "Northern Mariana Islands", 'us_subdivisions', 'listo' ),
			'ms' => _x( "Mississippi", 'us_subdivisions', 'listo' ),
			'mt' => _x( "Montana", 'us_subdivisions', 'listo' ),
			'nc' => _x( "North Carolina", 'us_subdivisions', 'listo' ),
			'nd' => _x( "North Dakota", 'us_subdivisions', 'listo' ),
			'ne' => _x( "Nebraska", 'us_subdivisions', 'listo' ),
			'nh' => _x( "New Hampshire", 'us_subdivisions', 'listo' ),
			'nj' => _x( "New Jersey", 'us_subdivisions', 'listo' ),
			'nm' => _x( "New Mexico", 'us_subdivisions', 'listo' ),
			'nv' => _x( "Nevada", 'us_subdivisions', 'listo' ),
			'ny' => _x( "New York", 'us_subdivisions', 'listo' ),
			'oh' => _x( "Ohio", 'us_subdivisions', 'listo' ),
			'ok' => _x( "Oklahoma", 'us_subdivisions', 'listo' ),
			'or' => _x( "Oregon", 'us_subdivisions', 'listo' ),
			'pa' => _x( "Pennsylvania", 'us_subdivisions', 'listo' ),
			'pr' => _x( "Puerto Rico", 'us_subdivisions', 'listo' ),
			'ri' => _x( "Rhode Island", 'us_subdivisions', 'listo' ),
			'sc' => _x( "South Carolina", 'us_subdivisions', 'listo' ),
			'sd' => _x( "South Dakota", 'us_subdivisions', 'listo' ),
			'tn' => _x( "Tennessee", 'us_subdivisions', 'listo' ),
			'tx' => _x( "Texas", 'us_subdivisions', 'listo' ),
			'um' => _x( "United States Minor Outlying Islands", 'us_subdivisions', 'listo' ),
			'ut' => _x( "Utah", 'us_subdivisions', 'listo' ),
			'va' => _x( "Virginia", 'us_subdivisions', 'listo' ),
			'vi' => _x( "Virgin Islands, U.S.", 'us_subdivisions', 'listo' ),
			'vt' => _x( "Vermont", 'us_subdivisions', 'listo' ),
			'wa' => _x( "Washington", 'us_subdivisions', 'listo' ),
			'wi' => _x( "Wisconsin", 'us_subdivisions', 'listo' ),
			'wv' => _x( "West Virginia", 'us_subdivisions', 'listo' ),
			'wy' => _x( "Wyoming", 'us_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'states' => array( 'ak', 'al', 'ar', 'az', 'ca', 'co', 'ct', 'de',
				'fl', 'ga', 'hi', 'ia', 'id', 'il', 'in', 'ks', 'ky', 'la', 'ma',
				'md', 'me', 'mi', 'mn', 'mo', 'ms', 'mt', 'nc', 'nd', 'ne', 'nh',
				'nj', 'nm', 'nv', 'ny', 'oh', 'ok', 'or', 'pa', 'ri', 'sc', 'sd',
				'tn', 'tx', 'ut', 'va', 'vt', 'wa', 'wi', 'wv', 'wy',
			),
			'districts' => array( 'dc' ),
			'outlying_areas' => array( 'as', 'gu', 'mp', 'pr', 'um', 'vi' ),
		);
	}
}
