<?php

	namespace Maverick;

	/**
	 * FighterJet
	 *
	 * This mega powerhouse of a class allows for you to exit with authority.
	 *
	 * @author Mike Corkum <mcorkum@gmail.com>
	 * @copyright 2015 Kick Paul Blanco in the Face Studios
	 * @license http://www.php.net/license/3_01.txt PHP License 3.01
	 */

	class FighterJet
	{
		/**
		 * Exits like a fucking champion
		 *
		 * @param parameters will only slow FighterJet.io down
		 */
		public function __construct()
		{
			$this->exit_like_a_boss();
		}

		/**
		 * FighterJet.IO Core Function
		 *
		 * @param awesomeness cannot be defined.
		 */
		private function exit_like_a_boss()
		{
			exit();
		}

	}