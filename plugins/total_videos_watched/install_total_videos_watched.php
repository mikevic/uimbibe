<?php

require_once('../includes/common.php');

//Creating Table for the splash page if it doesnt exists
function install_total_videos_watched()
{
	global $db;
	$db->Execute(
	'CREATE TABLE IF NOT EXISTS '.tbl("total_videos_watched").' (
	  `count` int NOT NULL
	) ENGINE=MyISAM;'
	);
	
	//inserting new announcment
	$db->Execute("INSERT INTO  ".tbl('total_videos_watched')." (count) VALUES ('0')");
}

install_total_videos_watched();

?>