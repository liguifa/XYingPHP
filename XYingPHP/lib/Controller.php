<?php
class Controller
{
	private static $htmlNode=array();

	private static $htmlNodeForeach=array();

	public function Show($htmlName=null)
	{
		if(!isset($htmlName))
			$htmlName=APP_PATH."/Views/".(isset($_GET["c"])?$_GET["c"]:"Home")."/".(isset($_GET["c"])?$_GET["a"]:"index").".html";
		FileOperation::ReaderReplace($htmlName,self::$htmlNode);
		$text=FileOperation::ForReaderReplace($htmlName,self::$htmlNodeForeach);
		echo $text;
	}

	public function Assign($sub,$str,$type)
	{
		switch($type)
		{
			case "string":
				$sub="@".$sub;
				self::$htmlNode[]=Array("sub"=>$sub,"str"=>$str);
				break;
			case "foreach":
				self::$htmlNodeForeach[$sub]=$str;
				break;
		}
	}
}
?>