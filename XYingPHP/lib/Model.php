<?php
class Model extends SqlHelper
{
	private $ChangeData=array();

	public function Create()
	{
		$models=$this->Exec();
		$m=array();
		foreach($models as $model)
		{
			foreach($model as $key => $value)
			{
				$this->$key=$value;
			}
			$m[]=$this;
		}
		return $m;
	}

	public function SaveChang()
	{
		return $this->Updata()->Where()->Exec();
	}

	public static function Statement()
	{
		return new self;
	}

	public function __get($property_name)
	{
		if(isset($this->$property_name))
		{
			return $this->$property_name;
		}
		else
		{
			return null;
		}
	}

	public function __set($property_name, $value)
	{
		if($this->$property_name!=$value)
		{
			$ChangeData[]=array("$property_name" => "$value");
			$this->$property_name = $value;
		}
		
	}

	public function ToJson()
	{
		$json = array('status' => $this->status,'message'=>$this->message,'append'=>$this->append );
		return json_encode($json);
	}
}
?>