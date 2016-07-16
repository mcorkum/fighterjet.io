<?php

namespace Maverick;

class selfDestruct{

	/**
	 * Would hold class instance if everything wasn't going to shit
	 *
	 * @var selfDestruct
	 */
	protected static $instance;

	/**
	 * Get class instance and crash program
	 *
	 * @return \Maverick\instance|\Maverick\selfDestruct
	 */
	public static function instance(){
		if( null !== self::instance() ){
			self::$instance = new self();
		}

		return self::$instance;

	}


	protected function __construct(){}


}

