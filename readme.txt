=== Listo ===
Contributors: takayukister, yordansoares
Donate link: https://contactform7.com/donate/
Tags: list, countries, subdivisions, states, currencies
Tested up to: 6.7
Requires at least: 6.6
Requires PHP: 7.4
Stable tag: 1.8
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Listo supplies commonly used lists.

== Description ==

Listo is a simple plugin that supplies other plugins and themes with [commonly used lists](https://github.com/rocklobster-in/listo/tree/trunk/modules#lists-and-subgroups).

= Usage =

	$countries = listo(
		// List type
		'countries',
		// Options
		array(
			'group' => 'un',
			'orderby' => 'value',
			'order' => 'DESC',
		)
	);

== Installation ==

1. Upload the entire `listo` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 1.9 =

* New list module: `emoji_flags` --- Unicode emoji flag sequences
* Introduces the `Listo_DataList` class and the `datalist` shortcode.
* Adds the `telephone_country_codes` and `telephone_country_codes_noflag` data list types.
* Adds utility methods to the `countries_a2a3` and `telephone_country_codes` list modules.

= 1.8 =

* Updates country names in modules/countries.php.
* Adds support of the `orderby` and `order` options to `listo()`.
* Adds modules/countries-a2a3.php as the mapping table of ISO 3166-1 Alpha-2 and Alpha-3 codes.
* Adds modules/telephone-country-codes.php as the list of ITU-T E.164 country calling codes.
* Requires WordPress 6.4+.
