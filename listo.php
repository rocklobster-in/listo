<?php
/*
Plugin Name: Listo
Plugin URI: https://contactform7.com/listo/
Description: Listo is a simple plugin that supplies commonly used lists to other plugins and themes.
Author: Takayuki Miyoshi
Author URI: https://ideasilo.wordpress.com/
Text Domain: listo
Domain Path: /languages/
Version: 1.5
*/

define( 'LISTO_VERSION', '1.5' );
define( 'LISTO_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'LISTO_MODULES_DIR', path_join( LISTO_PLUGIN_DIR, 'modules' ) );
define( 'LISTO_LANGUAGES_DIR', path_join( LISTO_PLUGIN_DIR, 'languages' ) );

require_once LISTO_PLUGIN_DIR . '/rest-api.php';

interface Listo {
	public static function items();
	public static function groups();
}

class Listo_Manager {

	private static $lists = array();

	private static function get_list_types() {
		$list_types = array(
			'countries' => 'Listo_Countries',
			'ar_subdivisions' => 'Listo_AR_Subdivisions',
			'bo_subdivisions' => 'Listo_BO_Subdivisions',
			'br_subdivisions' => 'Listo_BR_Subdivisions',
			'ch_subdivisions' => 'Listo_CH_Subdivisions',
			'cl_subdivisions' => 'Listo_CL_Subdivisions',
			'co_subdivisions' => 'Listo_CO_Subdivisions',
			'cr_subdivisions' => 'Listo_CR_Subdivisions',
			'cu_subdivisions' => 'Listo_CU_Subdivisions',
			'do_subdivisions' => 'Listo_DO_Subdivisions',
			'ec_subdivisions' => 'Listo_EC_Subdivisions',
			'gt_subdivisions' => 'Listo_GT_Subdivisions',
			'hn_subdivisions' => 'Listo_HN_Subdivisions',
			'ht_subdivisions' => 'Listo_HT_Subdivisions',
			'in_subdivisions' => 'Listo_IN_Subdivisions',
			'mx_subdivisions' => 'Listo_MX_Subdivisions',
			'ni_subdivisions' => 'Listo_NI_Subdivisions',
			'pa_subdivisions' => 'Listo_PA_Subdivisions',
			'pe_subdivisions' => 'Listo_PE_Subdivisions',
			'pl_subdivisions' => 'Listo_PL_Subdivisions',
			'py_subdivisions' => 'Listo_PY_Subdivisions',
			'sv_subdivisions' => 'Listo_SV_Subdivisions',
			'us_subdivisions' => 'Listo_US_Subdivisions',
			'uy_subdivisions' => 'Listo_UY_Subdivisions',
			've_subdivisions' => 'Listo_VE_Subdivisions',
			'currencies' => 'Listo_Currencies',
			'time_zones' => 'Listo_Time_Zones',
		);

		return apply_filters( 'listo_list_types', $list_types );
	}

	public static function get_list_items( $type, $args = '' ) {
		$args = wp_parse_args( $args, array(
			'group' => '',
			'locale' => 'en_US',
		) );

		$list_types = self::get_list_types();

		if ( ! isset( $list_types[$type] ) ) {
			return false;
		}

		$class = $list_types[$type];

		if ( ! class_exists( $class ) ) {
			$mod = sanitize_file_name( str_replace( '_', '-', $type ) . '.php' );
			$mod = path_join( LISTO_MODULES_DIR, $mod );

			if ( file_exists( $mod ) ) {
				require_once $mod;
			}
		}

		if ( ! is_callable( array( $class, 'items' ) ) ) {
			return false;
		}

		$group = trim( $args['group'] );
		$locale = trim( $args['locale'] );
		$cloak_ticket = md5( $type . $group . $locale );

		if ( isset( self::$lists[$cloak_ticket] ) ) {
			return self::$lists[$cloak_ticket];
		}

		switch_to_locale( $locale );

		$items = call_user_func( array( $class, 'items' ) );

		if ( $group and is_callable( array( $class, 'groups' ) ) ) {
			$groups = call_user_func( array( $class, 'groups' ) );

			if ( isset( $groups[$group] ) ) {
				$items = array_intersect_key(
					$items,
					array_fill_keys( $groups[$group], '' )
				);
			}
		}

		restore_previous_locale();

		self::$lists[$cloak_ticket] = $items;
		return $items;
	}

}

function listo( $type, $args = '' ) {
	return Listo_Manager::get_list_items( $type, $args );
}
