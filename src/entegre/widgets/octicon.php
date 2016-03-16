<?php

/**
 * @package entegre-widgets
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\widget;

class octicon extends \entegre\factory\node {

	private $_m = false;

	public function __construct( $i = null ) {
		parent::__construct( 'i' );
		$this->icon( $i );
	}

	public function css() {
		return 'https://cdnjs.cloudflare.com/ajax/libs/octicons/3.4.1/octicons.min.css';
	}

	public function icon( $n = null ) {
		if( ! empty( $n ) ) {
			$this->attr( 'class', 'octicon-' . trim( strtolower( $n ) ) );
		}
		return $this;
	}

	public function mega() {
		$this->_m = true;
		return $this;
	}

	public function build() {
		$this->attr( 'class', ( $this->_m ? 'mega-' : null ) . 'octicon' );
		return parent::build();
	}

}

?>