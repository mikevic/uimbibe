<?php
//Function used to uninstall Plugin
	function un_install_total_videos_watched()
	{
		global $db;
		$db->Execute(
		'DROP TABLE '.tbl("total_videos_watched").''
		);
	}
	
	un_install_total_videos_watched();
?>