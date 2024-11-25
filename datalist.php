<?php

class Listo_DataList {

	private static $list_types = array(
		'telephone_country_codes' => array(
			'callback' => 'listo_datalist_telephone_country_codes',
		),
		'telephone_country_codes_noflag' => array(
			'callback' => 'listo_datalist_telephone_country_codes_noflag',
		),
	);

	public static function is_available_list_type( $list_type ) {
		return array_key_exists( $list_type, self::$list_types );
	}

	public static function get_callback( $list_type ) {
		if ( ! self::is_available_list_type( $list_type ) ) {
			return null;
		}

		$list_type = self::$list_types[$list_type];

		return $list_type['callback'];
	}

}


add_shortcode( 'datalist',
	static function ( $atts, $content = null, $shortcode_tag = '' ) {
		$atts = shortcode_atts(
			array(
				'type' => '',
				'html_id' => '',
			),
			$atts,
			'listo_datalist'
		);

		if ( Listo_DataList::is_available_list_type( $atts['type'] ) ) {
			$options = array();

			if ( $atts['html_id'] ) {
				$options['html_id'] = $atts['html_id'];
			}

			$callback = Listo_DataList::get_callback( $atts['type'] );

			return call_user_func( $callback, $options );
		}
	}
);


function listo_datalist_telephone_country_codes( $options = '' ) {
	$options = wp_parse_args( $options, array(
		'html_id' => 'listo-telephone-country-codes',
		'with_flag' => true,
	) );

	Listo_Manager::load_module( 'countries' );
	Listo_Manager::load_module( 'countries_a2a3' );
	Listo_Manager::load_module( 'emoji_flags' );
	Listo_Manager::load_module( 'telephone_country_codes' );

	$output = '';

	$output .= sprintf(
		'<datalist id="%s">',
		esc_attr( $options['html_id'] )
	);

	foreach ( listo( 'countries' ) as $a3_code => $country_name ) {
		$telephone_country_code = Listo_TelephoneCountryCodes::get_code( $a3_code );

		if ( ! $telephone_country_code ) {
			continue;
		}

		if ( $options['with_flag'] ) {
			$a2_code = Listo_Countries_A2A3::convert_a3_to_a2( $a3_code );

			$output .= sprintf(
				'<option value="%1$s ">%2$s %3$s (%4$s)</option>',
				esc_attr( $telephone_country_code ),
				esc_html( Listo_EmojiFlags::get_html( $a2_code ) ),
				esc_html( $country_name ),
				esc_html( $telephone_country_code )
			);
		} else {
			$output .= sprintf(
				'<option value="%1$s ">%2$s (%3$s)</option>',
				esc_attr( $telephone_country_code ),
				esc_html( $country_name ),
				esc_html( $telephone_country_code )
			);
		}
	}

	$output .= '</datalist>';

	return $output;
}


function listo_datalist_telephone_country_codes_noflag( $options = '' ) {
	$options = array_merge(
		wp_parse_args( $options, array() ),
		array(
			'with_flag' => false,
		)
	);

	return listo_datalist_telephone_country_codes( $options );
}
