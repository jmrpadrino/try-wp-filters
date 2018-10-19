<?php
/*
 * Plugin Name: Filter Practice
 * Plugin URI: https://cloclomedia.com/
 * Version: 0.1
 * Description: Plugin für Trainingsplanung
 * Author: José Rodriguez 
 * Author URI: https://cloclomedia.com/
 * Text Domain: schnell
 * Domain Path: /languages
 * License: GPLv2 or later
 */
/*
    Schnellbuegel Training is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    Schnellbuegel Training is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Schnellbuegel Training.
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'fp_PLUGIN_DIR', trailingslashit( dirname(__FILE__) ) );
define( 'fp_PLUGIN_URI', plugins_url('', __FILE__) );

add_shortcode('cambiar-valor', 'cambiarValor');
function cambiarValor(){
	$variable = 'este es el valor';
	$variable = apply_filters('cambiar-valor-variable', $variable);
	return $variable;
}




