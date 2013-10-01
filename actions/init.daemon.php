<?php

/*
 * ClipBucket daemon to clean up the stuff
 * like clearing sessions and cache
 * to speed up the processes
 */

include(dirname(dirname(__FILE__)).'/includes/config.inc.php');


$mode = $argv[1];
$modes = array('start','stop','restart');


$dFile = BASEDIR.'/actions/cb_daemon.php';

function is_daemon_running()
{
    global $dFile;
    exec('ps w a',$commands);
    
    if(count($commands)>0)
    {
        foreach($commands as $command)
        {
            
            if(strpos($command, $dFile))
            {
                $mcommand = substr($command,0,15);
                preg_match('/[0-9]{4}/',$mcommand,$matches);
                $pid = $matches[0];
                return $pid;
            }
        }
    }
    
    return false;
}



if(!in_array($mode,$modes))
{
    exit('You can only start|stop|restart');
}


switch($mode)
{
    case "start":
    {
        $pid = is_daemon_running();
        if($pid)
        {
            exit("Daemon is already running : $pid");
        }else
        {
            exec(php_path()." -q ".$dFile." &> /dev/null &");
            exit("Daemon has been started");
        }
    }
    break;
    
    case "stop":
    {
        $pid = is_daemon_running();
        if(!$pid)
        {
            exit("Daemon is not running");
        }else
        {
            exec("kill ".$pid);
            exit("Daemon has been stopped");
        }
    }
    break;
    case "restart":
    {
        $pid = is_daemon_running();
        if(!$pid)
        {
            print("Stopping daemon [Failed]\n");
        }else
        {
            print("Stopping daemon [OK]\n");
            exec("kill ".$pid);
        }
        
        exec(php_path()." -q ".$dFile." &> /dev/null &");
        exit("Starting daemon [OK]");
    }
}
?>
