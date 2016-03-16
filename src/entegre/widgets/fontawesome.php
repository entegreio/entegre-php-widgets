<?php

/**
 * @package entegre-widgets
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\widget;

class fontawesome extends \entegre\factory\node {

	public function __construct( $i = null ) {
		parent::__construct( 'i' );
		$this->attr( 'class', 'fa' );
		$this->icon( $i );
	}

	public function css() {
		return 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';
	}

	public function icon( $n = null ) {
		if( ! empty( $n ) ) {
			$this->attr( 'class', 'fa-' . trim( strtolower( $n ) ) );
		}
		return $this;
	}

	public function size( $x ) {
		$sizes = [ 'lg', '2x', '3x', '4x', '5x' ];
		$x = trim( strtolower( $x ) );
		if( in_array( $x, $sizes ) ) {
			$this->attr( 'class', "fa-$x" );
		}
		return $this;
	}

	public function fixedwidth() {
		$this->attr( 'class', 'fa-fw' );
		return $this;
	}

	public function border() {
		$this->attr( 'class', 'fa-border' );
		return $this;
	}

	public function rotate( $a ) {
		$a = (integer)$a;
		if( $a >= 0 && $a <= 360 ) {
			$this->attr( 'class', "fa-rotate-$a" );
		}
		return $this;
	}

	public function flip( $d ) {
		$d = trim( strtolower( $d ) );
		if( in_array( $d, [ 'h', 'horz', 'horizontal' ] ) ) {
			$this->attr( 'class', 'fa-flip-horizontal' );
		} else if( in_array( $d, [ 'v', 'vert', 'vertical' ] ) ) {
			$this->attr( 'class', 'fa-flip-vertical' );
		}
		return $this;
	}

}

?>