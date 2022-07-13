<?php
/**
 * Subdivisions of Chile based on ISO 3166-2:CL standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:CL
 */

class Listo_CL_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'ai' => _x( 'Aisén del General Carlos Ibañez del Campo', 'cl_subdivisions', 'listo' ),
			'an' => _x( 'Antofagasta', 'cl_subdivisions', 'listo' ),
			'ap' => _x( 'Arica y Parinacota', 'cl_subdivisions', 'listo' ),
			'at' => _x( 'Atacama', 'cl_subdivisions', 'listo' ),
			'bi' => _x( 'Biobío', 'cl_subdivisions', 'listo' ),
			'co' => _x( 'Coquimbo', 'cl_subdivisions', 'listo' ),
			'ar' => _x( 'La Araucanía', 'cl_subdivisions', 'listo' ),
			'li' => _x( 'Libertador General Bernardo O\'Higgins', 'cl_subdivisions', 'listo' ),
			'll' => _x( 'Los Lagos', 'cl_subdivisions', 'listo' ),
			'lr' => _x( 'Los Ríos', 'cl_subdivisions', 'listo' ),
			'ma' => _x( 'Magallanes', 'cl_subdivisions', 'listo' ),
			'ml' => _x( 'Maule', 'cl_subdivisions', 'listo' ),
			'nb' => _x( 'Ñuble', 'cl_subdivisions', 'listo' ),
			'rm' => _x( 'Región Metropolitana de Santiago', 'cl_subdivisions', 'listo' ),
			'ta' => _x( 'Tarapacá', 'cl_subdivisions', 'listo' ),
			'vs' => _x( 'Valparaíso', 'cl_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
