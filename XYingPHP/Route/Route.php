<?php
class Route
{
	public static function Action()
	{
		switch(config::$system["url_mode"])
		{
			case 1:self::Ordinary_Mode();break;
			case 2:self::Optimize_Mode();break;
		}
	}

	private static function Ordinary_Mode()
	{
		$C=isset($_GET["c"])?$_GET["c"]:"Home";
		$A=isset($_GET["a"])?$_GET["a"]:"Index";
		$c=new $C;
		$c->$A() ;
	}

	private static function Optimize_Mode()
	{
		$url=$_SERVER['PHP_SELF'];
		$url_arr=split("index.php", $url);
		$p=split("/", $url_arr[1]);
		$C=isset($p[1])?$p[1]:"Home";
		$A=isset($p[2])?$p[2]:"Index";
		try
		{
			$c=new $C;
			$c->$A();
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}
}
?>