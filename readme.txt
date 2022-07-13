=== Listo ===
Contributors: takayukister, yordansoares
Donate link: https://contactform7.com/donate/
Tags: list, countries, subdivisions, states, currencies
Requires at least: 5.9
Tested up to: 6.0
Stable tag: 1.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Listo is a simple plugin that supplies commonly used lists to other plugins and themes.

== Description ==

Listo is a simple plugin that supplies other plugins and themes with commonly used lists (such as lists of countries, subdivisions of countries, and currencies). Listo is also able to filter list items based on defined subgroups. For example, Countries provides a list of countries and dependent territories based on the ISO 3166 standard (249 items), and its subgroup 'un' only includes members of the United Nations (193 items).

Listo currently has the following lists and subgroups.

* Countries (countries) &mdash; A list of countries and dependent territories based on the [ISO 3166](https://en.wikipedia.org/wiki/ISO_3166-1) standard (249 items).

	Subgroups:
	* un &mdash; Members of the United Nations (193 items)
	* olympic &mdash; Countries and dependent territories that have their National Olympic Committee (205 items)

* U.S. Subdivisions (us_subdivisions) &mdash; The list of subdivisions of the United States based on the [ISO 3166-2:US](https://en.wikipedia.org/wiki/ISO_3166-2:US) standard (57 items).

	Subgroups:
	* states (50 items)
	* districts (1 item; District of Columbia)
	* outlying_areas (6 items)

* Currencies (currencies) &mdash; A list of currencies based on the [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) standard (156 items).

	Subgroups: None

* Time Zones (time_zones) &mdash; UTC offsets.

	Subgroups: None

* Subdivisions of India (in_subdivisions) &mdash; The list of subdivisions of India based on the [ISO 3166-2:IN](https://en.wikipedia.org/wiki/ISO_3166-2:IN) standard (36 items).

	Subgroups:
	* states (29 items)
	* union_territories (7 items)

* [Subdivisions of Latin American countries](https://github.com/takayukister/listo/issues/1)

== Installation ==

1. Upload the entire `listo` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 1.4 =

* Uses `switch_to_locale()` to switch locale.
