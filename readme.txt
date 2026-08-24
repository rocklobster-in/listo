=== Listo ===
Contributors: rocklobsterinc, takayukister, yordansoares
Tags: list, countries, subdivisions, states, currencies
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://contactform7.com/donate/
Stable tag: 1.8
Requires at least: 6.6
Requires PHP: 7.4
Tested up to: 7.1

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

= 1.9.1 =

* Changes the author name to Rock Lobster Inc. (a Japan-based company that the original author, Takayuki Miyoshi, owns)
* Confirmed WordPress 7.1 compatibility.

= 1.9 =

* New list module: `emoji_flags` --- Unicode emoji flag sequences
* Introduces the `Listo_DataList` class and the `datalist` shortcode.
* Adds the `telephone_country_codes` and `telephone_country_codes_noflag` data list types.
* Adds utility methods to the `countries_a2a3` and `telephone_country_codes` list modules.
