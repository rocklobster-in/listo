<?php
/**
 * Datalist of international telephone number prefixes based on E.164
 *
 * @link https://en.wikipedia.org/wiki/E.164
 */

function listo_datalist_e164() {
	$telephone_country_codes = listo( 'telephone_country_codes' );
	$countries_a2a3 = listo( 'countries_a2a3' );
	$countries = listo( 'countries' );

	echo '<datalist id="listo-e164">';

	foreach ( $countries as $a3_code => $country_name ) {
		$telephone_country_code = $telephone_country_codes[$a3_code] ?? '';

		if ( ! $telephone_country_code ) {
			continue;
		}

		$a2_code = array_search(
			strtoupper( $a3_code ),
			$countries_a2a3
		);

		echo sprintf(
			'<option value="%1$s " class="countrycode-%2$s">%3$s (%4$s)</option>',
			esc_attr( $telephone_country_code ),
			esc_attr( $a2_code ),
			esc_html( $country_name ),
			esc_html( $telephone_country_code )
		);
	}

	echo '</datalist>';
}
