#/usr/bin/php
<?php

set_time_limit(0);
/*
 * ClipBucket daemon to clean up the stuff
 * like clearing sessions and cache
 * to speed up the processes
 */

include(dirname(dirname(__FILE__)).'/includes/config.inc.php');

$time = 1800; //per minute

while(1){ //A never ending loop

    //Clean up the sessions...
    $db->Execute("DELETE from ".tbl("sessions")." WHERE 
		TIMESTAMPDIFF(MINUTE,last_active,now()) 
			> 5 AND session_string='guest'");
    $guest_sess = $db->Affected_Rows();
    $db->Execute("DELETE from ".tbl("sessions")." WHERE 
            TIMESTAMPDIFF(MINUTE,last_active,now()) 
                    > ". COOKIE_TIMEOUT/60 ." AND session_string='smart_sess'");
    $smart_sess = $db->Affected_Rows();

    /*if($guest_sess)
            e("Removed '".$guest_sess."' inactive guest sessions","m");
    if($smart_sess)
            e("Removed '".$smart_sess."' inactive user sessions","m");

    if(!$guest_sess && !$smart_sess)
            e("All inactive sessions are already removed","m");*/
        
    sleep($time); //Run after every minute
}

?>
