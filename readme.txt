=== Listo ===
Contributors: takayukister, yordansoares
Donate link: https://contactform7.com/donate/
Tags: list, countries, subdivisions, states, currencies
Requires at least: 6.4
Requires PHP: 7.4
Tested up to: 6.3
Stable tag: 1.6
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

= 1.7 =

* Requires WordPress 6.2+ and PHP 7.4+.

= 1.6 =

* Removes the `switch_to_locale()` and `restore_previous_locale()` calls.

= 1.5 =

* Adds a module for subdivisions of Poland.

= 1.4 =

* Uses `switch_to_locale()` to switch locale.
