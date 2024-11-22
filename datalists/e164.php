<?php
/**
 * Datalist of international telephone number prefixes based on E.164
 *
 * @link https://en.wikipedia.org/wiki/E.164
 */

function listo_print_datalist_e164() {
	Listo_Manager::load_module( 'countries_a2a3' );
	Listo_Manager::load_module( 'emoji_flags' );

	$telephone_country_codes = listo( 'telephone_country_codes' );
	$countries = listo( 'countries' );

	echo '<datalist id="listo-e164">';

	foreach ( $countries as $a3_code => $country_name ) {
		$telephone_country_code = $telephone_country_codes[$a3_code] ?? '';

		if ( ! $telephone_country_code ) {
			continue;
		}

		$a2_code = Listo_Countries_A2A3::convert_a3_to_a2( $a3_code );

		echo sprintf(
			'<option value="%1$s ">%2$s %3$s (%4$s)</option>',
			esc_attr( $telephone_country_code ),
			esc_html( Listo_EmojiFlags::get_html( $a2_code ) ),
			esc_html( $country_name ),
			esc_html( $telephone_country_code )
		);
	}

	echo '</datalist>';
}

function listo_print_datalist_e164_noflag() {
	$telephone_country_codes = listo( 'telephone_country_codes' );
	$countries = listo( 'countries' );

	echo '<datalist id="listo-e164">';

	foreach ( $countries as $a3_code => $country_name ) {
		$telephone_country_code = $telephone_country_codes[$a3_code] ?? '';

		if ( ! $telephone_country_code ) {
			continue;
		}

		echo sprintf(
			'<option value="%1$s ">%2$s (%3$s)</option>',
			esc_attr( $telephone_country_code ),
			esc_html( $country_name ),
			esc_html( $telephone_country_code )
		);
	}

	echo '</datalist>';
}
