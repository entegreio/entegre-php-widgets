<?php

/**
 * @package entegre-widgets
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\widget;

class weathericon extends \entegre\factory\node {

	public function __construct( $i = null ) {
		parent::__construct( 'i' );
		$this->attr( 'class', 'wi' );
		$this->icon( $i );
	}

	public function css() {
		return [ 'https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons-wind.min.css' ];
	}

	public function icon( $n = null ) {
		if( ! empty( $n ) ) {
			$this->attr( 'class', 'wi-' . trim( strtolower( $n ) ) );
		}
		return $this;
	}

	public function fixedwidth() {
		$this->attr( 'class', 'wi-fw' );
		return $this;
	}

	public function rotate( $a ) {
		if( in_array( (integer)$a, [ 90, 180, 270 ] ) ) {
			$this->attr( 'class', "wi-rotate-$a" );
		}
		return $this;
	}

	public function flip( $d ) {
		$d = trim( strtolower( $d ) );
		if( in_array( $d, [ 'h', 'horz', 'horizontal' ] ) ) {
			$this->attr( 'class', 'wi-flip-horizontal' );
		} else if( in_array( $d, [ 'v', 'vert', 'vertical' ] ) ) {
			$this->attr( 'class', 'wi-flip-vertical' );
		}
		return $this;
	}

	public function wind() {
		$this->attr( 'class', 'wi-wind' );
		return $this;
	}

}

?>