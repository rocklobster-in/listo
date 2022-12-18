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

Listo currently supports [27 lists](https://github.com/takayukister/listo/tree/trunk/modules#lists-and-subgroups).

== Installation ==

1. Upload the entire `listo` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 1.5 =

* Adds a module for subdivisions of Poland.

= 1.4 =

* Uses `switch_to_locale()` to switch locale.
