<?php
class Db
{
	public static function Select($sql,$arr)
	{
		$sql="Select ";
		foreach($arr as $a)
		{
			$sql.=$a.",";
		}
		return $sql;
	}
}
?>