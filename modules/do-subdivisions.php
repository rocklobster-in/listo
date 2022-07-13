<?php
/**
 * Subdivisions of Dominican Republic based on ISO 3166-2:DO standard
 *
 * @link https://en.wikipedia.org/wiki/ISO_3166-2:DO
 */

class Listo_DO_Subdivisions implements Listo {
	private function __construct() {}

	public static function items() {
		return array(
			'02' => _x( 'Azua', 'do_subdivisions', 'listo' ),
			'03' => _x( 'Baoruco', 'do_subdivisions', 'listo' ),
			'04' => _x( 'Barahona', 'do_subdivisions', 'listo' ),
			'33' => _x( 'Cibao Nordeste', 'do_subdivisions', 'listo' ),
			'34' => _x( 'Cibao Noroeste', 'do_subdivisions', 'listo' ),
			'35' => _x( 'Cibao Norte', 'do_subdivisions', 'listo' ),
			'36' => _x( 'Cibao Sur', 'do_subdivisions', 'listo' ),
			'05' => _x( 'Dajabón', 'do_subdivisions', 'listo' ),
			'01' => _x( 'Distrito Nacional (Santo Domingo)', 'do_subdivisions', 'listo' ),
			'06' => _x( 'Duarte', 'do_subdivisions', 'listo' ),
			'08' => _x( 'El Seibo', 'do_subdivisions', 'listo' ),
			'37' => _x( 'El Valle', 'do_subdivisions', 'listo' ),
			'07' => _x( 'Elías Piña', 'do_subdivisions', 'listo' ),
			'38' => _x( 'Enriquillo', 'do_subdivisions', 'listo' ),
			'09' => _x( 'Espaillat', 'do_subdivisions', 'listo' ),
			'30' => _x( 'Hato Mayor', 'do_subdivisions', 'listo' ),
			'19' => _x( 'Hermanas Mirabal', 'do_subdivisions', 'listo' ),
			'39' => _x( 'Higuamo', 'do_subdivisions', 'listo' ),
			'10' => _x( 'Independencia', 'do_subdivisions', 'listo' ),
			'11' => _x( 'La Altagracia', 'do_subdivisions', 'listo' ),
			'12' => _x( 'La Romana', 'do_subdivisions', 'listo' ),
			'13' => _x( 'La Vega', 'do_subdivisions', 'listo' ),
			'14' => _x( 'María Trinidad Sánchez', 'do_subdivisions', 'listo' ),
			'28' => _x( 'Monseñor Nouel', 'do_subdivisions', 'listo' ),
			'15' => _x( 'Monte Cristi', 'do_subdivisions', 'listo' ),
			'29' => _x( 'Monte Plata', 'do_subdivisions', 'listo' ),
			'40' => _x( 'Ozama', 'do_subdivisions', 'listo' ),
			'16' => _x( 'Pedernales', 'do_subdivisions', 'listo' ),
			'17' => _x( 'Peravia', 'do_subdivisions', 'listo' ),
			'18' => _x( 'Puerto Plata', 'do_subdivisions', 'listo' ),
			'20' => _x( 'Samaná', 'do_subdivisions', 'listo' ),
			'21' => _x( 'San Cristóbal', 'do_subdivisions', 'listo' ),
			'31' => _x( 'San José de Ocoa', 'do_subdivisions', 'listo' ),
			'22' => _x( 'San Juan', 'do_subdivisions', 'listo' ),
			'23' => _x( 'San Pedro de Macorís', 'do_subdivisions', 'listo' ),
			'25' => _x( 'Santiago', 'do_subdivisions', 'listo' ),
			'26' => _x( 'Santiago Rodríguez', 'do_subdivisions', 'listo' ),
			'32' => _x( 'Santo Domingo', 'do_subdivisions', 'listo' ),
			'24' => _x( 'Sánchez Ramírez', 'do_subdivisions', 'listo' ),
			'41' => _x( 'Valdesia', 'do_subdivisions', 'listo' ),
			'27' => _x( 'Valverde', 'do_subdivisions', 'listo' ),
			'42' => _x( 'Yuma', 'do_subdivisions', 'listo' ),
		);
	}

	public static function groups() {
		return array(
			'district' => array( '01' ),
			'regions' => array( '33', '34', '35', '36', '37', '38',
				'39', '40', '41', '42',
			),
			'provinces' => array( '02', '03', '04', '05', '06', '08',
				'07', '09', '30', '19', '10', '11', '12', '13', '14', '28',
				'15', '29', '16', '17', '18', '20', '21', '31', '22', '23',
				'25', '26', '32', '24', '27',
			),
		);
	}
}
