<?
/*
	Plugin Name: Total videos watched
	Description: This will let you display total count of videos watched from day one
	Author: Christian Rasmussen
	ClipBucket Version: 2 and above
	Plugin Version: 1.0
	Website: http://bugs.outskirts.dk/blog
*/

/*
    Where you want the count to display, you insert {total_videos_watched} in the style
    
    */

register_anchor_function('add_total_count','before_watch_player'); // make the function happen automatically when the player page is generated

function add_total_count(){
    mysql_query("UPDATE cb_total_videos_watched SET count = count +1") or e('Count not working!'); // add one to the count, since page loads several times it will happen more than once
}


$counts_query = mysql_query("SELECT count FROM cb_total_videos_watched"); // get the count
$counts = mysql_fetch_row($counts_query) or e('Could not get count'); // using a database query
$Smarty->assign('total_videos_watched',round($counts[0] / 3));  //it seems the page is loaded 3 times, almost every time ..
                                                                //so lets try to represent the actual count, while still being really lazy
                                                                //and assign it to a smart variable, so that you can put it in where you like
                                                                //by putting something like: Total videos served {total_videos_watched}
                                                                //anywhere in any template, to display properly instead of using the anchor below

//just to prove the concept, comment out when you have found a better place
register_anchor('<div align="right">Total videos served since day one: '.round($counts[0] / 3).'</div>','before_watch_player'); // ugly display in the watch video page

?>