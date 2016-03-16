<?php

/**
 * @package entegre-widgets
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\widget;

class gravatar extends \entegre\factory\node {

	protected $_email = null;

	protected $_size = 0;

	public function __construct( $email = null, $size = 0 ) {
		parent::__construct( 'img' );
		$this->attr( 'class', 'e-gravatar' );
		$this->email( $email );
		$this->size( $size );
	}

	public function email( $s ) {
		if( ! empty( $s ) ) {
			$this->_email = trim( strtolower( $s ) );
		}
		return $this;
	}

	public function size( $i ) {
		if( (integer)$i > 0 ) {
			$this->_size = (integer)$i;
		}
		return $this;
	}

	protected function uri() {
		return 'http://www.gravatar.com/avatar/' . md5( $this->_email ) . ( empty( $this->_size ) ? null : '?s=' . $this->_size );
	}

	public function build() {
		$this->attr( 'src', $this->uri() );
		return parent::build();
	}

}

?>