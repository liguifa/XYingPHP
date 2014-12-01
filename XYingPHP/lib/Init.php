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
		foreach($res as $table)
		{
			$table_key="Tables_in_".config::$dbConnect["database"];
			echo "正在创建数据表".$table[$table_key]."...<br />";
			$str='<?php class '.$table[$table_key]." extends Model{\n";
			$cols=$db->Desc($table[$table_key])->Exec();
			foreach($cols as $col)
			{
				$str=$str."private $".$col["Field"].";\n";
			}
			$str.="}?>";
			FileOperation::Write(APP_PATH."/Model/".$table[$table_key].".php",$str);
		}
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