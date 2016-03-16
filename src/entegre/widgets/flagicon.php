<?php

/**
 * @package entegre-widgets
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\widget;

class flagicon extends \entegre\factory\node {

	public function __construct( $i = null ) {
		parent::__construct( 'i' );
		$this->attr( 'class', 'flag-icon' );
		$this->icon( $i );
	}

	public function css() {
		return 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/1.0.0/css/flag-icon.min.css';
	}

	public function icon( $n = null ) {
		if( ! empty( $n ) ) {
			$this->attr( 'class', 'flag-icon-' . trim( strtolower( $n ) ) );
		}
		return $this;
	}

	public function square() {
		$this->attr( 'class', 'flag-icon-squared' );
		return $this;
	}

}

?>