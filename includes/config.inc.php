<?php
/*
Config.Inc.php
*/
define("FRONT_END",TRUE);
define("BACK_END",FALSE);

if(!defined('PARENT_PAGE'))
	define("PARENT_PAGE","home");
	
include('common.php');


define('TEMPLATEDIR',BASEDIR.'/'.TEMPLATEFOLDER.'/'.TEMPLATE);
define('TEMPLATEURL',BASEURL.'/'.TEMPLATEFOLDER.'/'.TEMPLATE);
define('LAYOUT',TEMPLATEDIR.'/layout');
define('ADMINLAYOUT',BASEDIR.'/'.ADMINDIR.'/'.TEMPLATEFOLDER.'/'.TEMPLATE.'/layout');

Assign('baseurl',BASEURL);
Assign('imageurl',TEMPLATEURL.'/images');
Assign('admimageurl',BASEURL.'/'.ADMINDIR.'/'.TEMPLATEFOLDER.'/'.TEMPLATE.'/images');
Assign('layout',TEMPLATEURL.'/layout');
Assign('theme',TEMPLATEURL.'/theme');
Assign('admtheme',BASEURL.'/'.ADMINDIR.'/'.TEMPLATEFOLDER.'/'.TEMPLATE.'/theme');
Assign('template_dir',TEMPLATEDIR);
Assign('style_dir',LAYOUT);

		



include('plugins.php');

//Assigning JS Files
Assign('jsArray',$Cbucket->JSArray);
//Assigning Module Files
Assign('module_list',$Cbucket->moduleList);


//Checking Website is closed or not
if(config('closed') && THIS_PAGE!='ajax' && !$in_bg_cron && THIS_PAGE!='cb_install')
{
	
	if(!has_access("admin_access",TRUE))
	{	e($row['closed_msg'],"w");
		template("global_header.html");
		template("message.html");
		exit();
	}else{
		e(lang("ATTENTION: THIS WEBSITE IS IN OFFLINE MODE"),"w");
	}
}

//Configuring Uploader
uploaderDetails();
isSectionEnabled(PARENT_PAGE,true);

//setting quicklist
assign('total_quicklist',$cbvid->total_quicklist());

?>