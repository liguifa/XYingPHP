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

	public function SaveChange()
	{
		return $this->Update()->Where()->Exec();
	}

	public function Add()
	{
		return $this->Insert()->From(get_class($this))->Exec();
	}

	public function Delete()
	{
		return $this->Delete()->Where()->Exec();
	}

	public function Count($arr)
	{
		$models=$this->Exec();
		foreach($models as $r)
		{
			if($r[$models[]])
		}
	}

	public function Sum($col)
	{
		$models=$this->Exec();
		$sum=0;
		foreach($models as $m)
		{
			$sum+=$m[$col];
		}
		return $sum;
	}

	public function Min($col)
	{
		$models=$this->Exec();
		foreach($models as $m)
		{
			if(!isset($min))
			{
				$min=$m[$col];
				break;
			}
			else
			{
				if($min>$m[$col])
				{
					$min=$m[$col];
				}
			}
		}
		return $min;
	}

	public function Max($col)
	{
		$models=$this->Exec();
		foreach($models as $m)
		{
			if(!isset($max))
			{
				$max=$m[$col];
			}
			else
			{
				if($max<$m[$col])
				{
					$max=$m[$col];
				}
			}
		}
		return $max;
	}

	public function Average()
	{
		$models=$this->Exec();
		$sum=0;
		foreach($models as $m)
		{
			$sum+=$m[$col];
		}
		return intval($sum/sizeof($models));
	}

	public function Aggregate()
	{
		//TODO
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