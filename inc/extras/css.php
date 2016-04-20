<?php
/**
 * Bootswatch CSS.
 *
 * @package Bootswatch
 */

/**
 * Adds inline CSS in header.
 */
function bootswatch_css() {

	$css = '';

	/**
	 * Remove padding on search form.
	 */
	$css .= '.navbar-collapse{ padding-right: 0; }';

	/**
	 * Fix overlapping with WordPress admin bar.
	 */
	$css .= 'body.admin-bar .navbar-fixed-top{ top: 32px; }';

	/**
	 * Fix overlapping with Bootstrap's fixed navbar.
	 */
	if ( bootswatch_use( 'fixed_navbar' ) ) {

		$variables_path = bootswatch_get_option( 'theme' )
			? get_template_directory() . '/vendor/bootswatch/themes/' . bootswatch_get_option( 'theme' ) . '/vars.less'
			: get_template_directory() . '/vendor/bootstrap/less/variables.less'
		;

		$less_parser = new Less_Parser();
		$less_parser->parseFile( $variables_path, home_url() );
		$less_parser->parse( 'body { padding-top: (@navbar-height + @navbar-margin-bottom); }' );
		$css .= $less_parser->getCss();
	}
	echo "<style>$css</style>"; // WPCS: xss ok.
}

add_action( 'wp_head', 'bootswatch_css' );
