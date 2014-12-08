<?php
class Controller
{
	private static $htmlNode=array();

	private static $htmlNodeForeach=array();

	private static $htmlNodeIf=array();

	/**
	 * 显示视图
	 * @param string $htmlName 将要显示的视图路径
	 */
	public function Show($htmlName=null)
	{
		if(!isset($htmlName))
			$htmlName=APP_PATH."/Views/".(isset($_GET["c"])?$_GET["c"]:"Home")."/".(isset($_GET["c"])?$_GET["a"]:"index").".html";
		FileOperation::ReaderReplace($htmlName,self::$htmlNode);
		FileOperation::IfReaderReplace($htmlName,self::$htmlNodeIf);
		$text=FileOperation::ForReadeReplace($htmlName,self::$htmlNodeForeach);
		echo $text;
	}

	public function String($str)
	{
		echo $str;
	}

	public function Json($str)
	{
		$json="{";
		if(is_object($str))
		{
			foreach($str as $key => $vslue)
			{
				$json=$json."\"$key\":\"$value\",";
			}
			$json=substr($json, -1)."}";
		}
		echo $json;
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
			case "if":
				self::$htmlNodeIf[$sub]=$str;
				break;
		}
	}
}
?>