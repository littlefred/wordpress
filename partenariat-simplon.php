<?php
/*
Plugin Name: Simplon plugin
Plugin URI: http://192.168.1.160//Users/Frederick/eclipse-workspace/wordpress/README.md
Description: Un plugin d'ajout de la mention simplon pour le développement sous WordPress
Version: 0.1
Author: Frederick PAREJA
Author URI: http://c8b4241706184a2f8eac1426c5df6fe2.testing-url.ws
License: formation wordpress
*/

function simplonMention() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co" target="_blank">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'simplonMention');