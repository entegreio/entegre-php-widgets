<?php

/**
 * @package entegre-widgets
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\widget;

spl_autoload_register( function ( $n ) {
	$n = str_replace( '\\', '/', strtolower( ltrim( strtolower( substr( $n, 0, 14 ) ) == 'entegre\\widget' ? substr( $n, 14 ) : $n, '\\' ) ) );
	$f = __DIR__ . '/' . $n . '.php';
	if( is_file( $f ) ) {
		require_once $f;
	}
} );

function E( $cls, $arg = null ) {
	$c = strtolower( "entegre\\widget\\$cls" );
	if( class_exists( $c ) ) {
		return new $c( $arg );
	}
}

\entegre\cfg()->add( 'search_order', 'widget' );

?>