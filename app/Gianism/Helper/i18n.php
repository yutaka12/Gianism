<?php

namespace Gianism\Helper;

/**
 * i18n helper
 * @package Gianism
 */
trait i18n {

	/**
	 * i18n Domain
	 *
	 * @var string
	 */
	protected $domain = \GIANISM_DOMAIN;

	/**
	 * Alias of __
	 *
	 * @deprecated 4.0.0
	 * @param string $string
	 *
	 * @return string
	 */
	public function _( $string ) {
		return __( $string, $this->domain );
	}

	/**
	 * Alias of _e
	 *
	 * @deprecated 4.0.0
	 * @param string $string
	 */
	public function e( $string ) {
		_e( $string, $this->domain );
	}

}
