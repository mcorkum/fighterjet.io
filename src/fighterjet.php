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
			
			// GOOOOOOOOOOOOOOOOOOOOOOOOSE!!!!!!!!!!
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
				);
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
		
		/**
		 * Enter the Danger Zone
		 */
		private function the_danger_zone( $to = 'highway' ) {
			if ( $to == 'ride_in' ) {
				$this->danger_zone();
			} else {
				$this->danger_zone();
			} 
		}
 
                /**
                * Requirement for Danger Zone based functions
                */
                private function call_kenny_loggins( $called = false )
                {
                        if ($called) {
                                $this->danger_zone();
                        } else {
                                $this->exit_like_a_boss();
                        }
                }
		
		/**
		 * The Danger Zone
		 */
		private function danger_zone() 
		{
			/**
			 * FighterJet exit!
			 */
			$this->exit_like_a_boss();
		} 
        
        
        
        /**
		 * If we have Kenny Loggins, we must also have...
         * @param KENNY DONT NEED NO PARAMS
		 */
		private function call_kenny_loggouts() 
		{
			/**
			 * FighterJet's Spreadin' out her wings tonight
			 */
            wp_logout();
			$this->exit_like_a_boss();
		} 
        
	}
