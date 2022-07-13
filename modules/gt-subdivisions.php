<?php
/**
 * Subdivisions of Guatemala based on ISO 3166-2:GT standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:GT
 */

class Listo_GT_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'av' => _x( 'Alta Verapaz', 'gt_subdivisions', 'listo' ),
			'bv' => _x( 'Baja Verapaz', 'gt_subdivisions', 'listo' ),
			'cm' => _x( 'Chimaltenango', 'gt_subdivisions', 'listo' ),
			'cq' => _x( 'Chiquimula', 'gt_subdivisions', 'listo' ),
			'pr' => _x( 'El Progreso', 'gt_subdivisions', 'listo' ),
			'es' => _x( 'Escuintla', 'gt_subdivisions', 'listo' ),
			'gu' => _x( 'Guatemala', 'gt_subdivisions', 'listo' ),
			'hu' => _x( 'Huehuetenango', 'gt_subdivisions', 'listo' ),
			'iz' => _x( 'Izabal', 'gt_subdivisions', 'listo' ),
			'ja' => _x( 'Jalapa', 'gt_subdivisions', 'listo' ),
			'ju' => _x( 'Jutiapa', 'gt_subdivisions', 'listo' ),
			'pe' => _x( 'Petén', 'gt_subdivisions', 'listo' ),
			'qz' => _x( 'Quetzaltenango', 'gt_subdivisions', 'listo' ),
			'qc' => _x( 'Quiché', 'gt_subdivisions', 'listo' ),
			're' => _x( 'Retalhuleu', 'gt_subdivisions', 'listo' ),
			'sa' => _x( 'Sacatepéquez', 'gt_subdivisions', 'listo' ),
			'sm' => _x( 'San Marcos', 'gt_subdivisions', 'listo' ),
			'sr' => _x( 'Santa Rosa', 'gt_subdivisions', 'listo' ),
			'so' => _x( 'Sololá', 'gt_subdivisions', 'listo' ),
			'su' => _x( 'Suchitepéquez', 'gt_subdivisions', 'listo' ),
			'to' => _x( 'Totonicapán', 'gt_subdivisions', 'listo' ),
			'za' => _x( 'Zacapa', 'gt_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array();
	}
}
