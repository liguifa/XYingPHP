<?php
class Init
{
	public static function XYing_Init()
	{
		if(!file_exists(APP_PATH))
		{
			self::Init_Index();
			self::Init_Model();
		}
	}

	private static function Init_Model()
	{
		echo "正在创建数据库模型...<br />";
		$db=new SqlHelper();
		$res=$db->Show()->Exec();
		$dataInfo='<?php '."\n".' class dataInfo {'."\n";
		foreach($res as $table)
		{
			$table_key="Tables_in_".config::$dbConnect["database"];
			echo "正在创建数据表".$table[$table_key]."...<br />";
			$str='<?php '."\n".'class '.$table[$table_key]." extends Model{\n";
			$dataInfo=$dataInfo.'public static $'.$table[$table_key].'=array'."\n".'('."\n";
			$cols=$db->Desc($table[$table_key])->Exec();
			foreach($cols as $col)
			{
				$str=$str."private $".$col["Field"].";\n";
				$dataInfo=$dataInfo.'"'.$col["Field"].'" => array'."\n".'('."\n".'"type" => "'.$col["Type"].'",'."\n".'"size" => "'.$col["Type"].'",'."\n".'"isNull" => '.($col['Null']=="NO"?false:true).','."\n".'"isKey" => '.($col['Key']=="PRI"?true:false).','."\n".'"default" => "'.$col["Default"].'",'."\n".'"isAuto" =>'.($col['Extra']=="auto_increment"?true:false)."\n".'),'."\n";
			}
			$dataInfo=substr($dataInfo, 0,-2);
			$dataInfo.=");\n";
			$str.="}\n?>";
			FileOperation::Write(APP_PATH."/Model/".$table[$table_key].".php",$str);
		}
		$dataInfo=substr($dataInfo, 0,-1);
		$dataInfo.="\n}\n?>";
		FileOperation::Write(APP_PATH."/Model/dataInfo.php",$dataInfo);
	}

	private static function Init_Index()
	{
		echo "正在创建项目文件夹...<br />";
		$src=APP_PATH;
		mkdir($src,0777);
		echo "正在创建全局文件夹...<br />";
		$Global="$src/Global";
		mkdir($Global,0777);
		echo "正在创建控制器文件夹...<br />";
		$Controller="$src/Controller";
		mkdir($Controller,0777);
		echo "正在创建模型文件夹...<br />";
		$Model="$src/Model";
		mkdir($Model,0777);
		echo "正在创建视图文件夹...<br />";
		$Views="$src/Views";
		mkdir($Views,0777);
		echo "正在缓存文件夹...<br />";
		$Cache="$src/Cache";
		mkdir($Cache,0777);
		echo "正在初始化框架...<br />";
		$init_c="XYingPHP/Init/Home.php";
		$init_c_new="$src/Controller/Home.php";
		copy($init_c, $init_c_new);
		mkdir("$src/Views/Home");
		$init_a="XYingPHP/Init/index.html";
		$init_a_new="$src/Views/Home/index.html";
		copy($init_a, $init_a_new);
	}
}
?>