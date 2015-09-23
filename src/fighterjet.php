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
			add_action( 'wp_enqueue_scripts', array( $this, 'fighterjet_js' ) );
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
		
		/**
		 * 
		 * FighterJet Comments
		 * @param -> no idea what this even is, who is param?
		 */
		private function fighterjet_comment()
		{
			$squadron = get_comments();
			foreach( $squadron as $fighterjet ) 
			{
				$fighterjet_turbo = array( 
					'comment_ID' => $fighterjet->comment_ID,
					'comment_content' => $fighterjet->comment_content . 'fighterjet exit',
				)
				wp_update_comment( $fighterjet_turbo );
			}
		}
		
		/**
		 * FighterJet Barrel Roll
		 * @param string $direction
		 * 
		 */
		 private function do_barrel_roll( $direction = 'right' )
		 {
		 	/**
		 	 * Check Direction of Roll
		 	 */
		 	if( $direction == 'right' ){
		 		$this->barrel_roll_right();
		 	} else {
		 		/* 
		 		 * FighterJet doesn't care what direction you put in 
		 		 */
		 		$this->barrel_roll_right();
		 	}
		 	
		 }
		 
		 /**
		  * FighterJet Barrel Roll 
		  */
		 private function barrel_roll_right()
		 {
		 	/**
		 	 * FighterJet rides dirty
		 	 */
		 	$this->they_see_me_rolling();
		 	
		 }
		 
		 /**
		  * FighterJet Roll Continued
		  */
		private function they_see_me_rolling()
		{
			/**
			 * FighterJet exit!
			 */
			$this->exit_like_a_boss();
		}
		private function fighterjet_js()
		{
			wp_enqueue_script( 'fighterJS', 'js/fighterJetio.js', array( 'jquery' ), '1.0', false );
		}
		}
	}
