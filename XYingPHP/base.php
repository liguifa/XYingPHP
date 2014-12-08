<?php
require_once "Conf/config.php";
require_once "lib/Controller.php";
require_once "lib/SqlHepler.php";
require_once "lib/Model.php";
require_once "lib/FileOperation.php";
require_once "Route/Route.php";
require_once "lib/Init.php";
require_once "Cache/Cache.php";
require_once "lib/StatusAttribute.php";
if(config::$system["sys_debug"])
{
	Init::XYing_Init();
    Cache::cache_start();
}
$dir=array(APP_PATH);
$num=1;
for($i=0;$i<$num;$i++)
{
	if (is_dir($dir[$i]))
	{
    	if ($dh = opendir($dir[$i]))
    	{
        	while ($file = readdir($dh))
        	{
        		if($file!="."&&$file!="..")
        		{

        			$file=$dir[$i]."/$file";
        			if(is_dir($file))
        			{
        				$dir[$num]=$file;
        				$num++;
        			}
        			else
        			{
        				$fileInfo=split("\.", $file);
        				if($fileInfo[1]=="php")
        				{
        					require_once "$file";
        				}
        			}
        		}
            }
        }
        closedir($dh);
    }
}
if(config::$system["sys_debug"])
{
    Cache::cache_end();
}
Route::Action();
?>
