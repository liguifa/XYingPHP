<?php
class config
{
	public static $dbConnect=array(
		"host" =>"localhost" , 
		"user"=>"root",
		"pwd"=>"123456",
		"database"=>"gdky",
		"db_type" => "mysql"
		);
	public static $system=array(
		"url_mode" => 2,
		"sys_debug" => true,
		"cache_time" => 60,
		"cache_path" => "Cache" 
		);
}
?>