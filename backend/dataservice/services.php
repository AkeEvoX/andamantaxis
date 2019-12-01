<?
include_once('../../include/connect.php'); 

class Services{
	
	
	protected $base ;
	
	public function __construct()
	{
		$this->base = new mysql;
	}
	
	function getprovince($select)
	{
		$sql = "select * from province order by province_name ";
		$this->base->query($sql);
		while($row = $this->base->fetchArray())
		{
			$pick ="";
			if($select == $row["province_id"])
			{
				$pick = "selected";
			}
			$response .= "<option value='".$row["province_id"]."' $pick>".$row["province_name"]." / ".$row["province_name_eng"] ." </option>";
		}
		return $response;
	}
	
	function getlocation($select)
	{
		$sql = "select * from travel_location where tlocation_status=1 order by tlocation_name ";
		$this->base->query($sql);
		while($row = $this->base->fetchArray())
		{
			$pick ="";
			if($select == $row["tlocation_id"])
			{
				$pick = "selected";
			}
			$response .= "<option value='".$row["tlocation_id"]."' $pick>".$row["tlocation_name"]."</option>";
		}
		return $response;
	}
	
	function getlocationtype($select)
	{
		$sql = "select * from location_type  ";
		$this->base->query($sql);
		while($row = $this->base->fetchArray())
		{
			$pick ="";
			if($select == $row["id"])
			{
				$pick = "selected";
			}
			$response .= "<option value='".$row["id"]."' $pick>".$row["name"]."</option>";
		}
		
		return $response;
	}
	
	function getvehicletype($select)
	{
		$sql = "select * from vehicle_type  ";
		$this->base->query($sql);
		while($row = $this->base->fetchArray())
		{
			$pick ="";
			if($select == $row["vtype_id"])
			{
				$pick = "selected";
			}
			$response .= "<option value='".$row["vtype_id"]."' $pick>".$row["vtype_name"]."</option>";
		}
		
		return $response;
	}
	
	function getstatus($select)
	{
		
		if($select=="1")
			$choice1 = "selected";
		if ($select=="0")
			$choice2 = "selected";
		
		$response = "<option value='1' $choice1 >Enable</option>";
		$response .= "<option value='0' $choice2 >Disable</option>";
		
		return $response;
	}
	
	function getbound($select)
	{
		if($select=="1")
			$choice1 = "selected";
		if ($select=="2")
			$choice2 = "selected";
		
		$response = "<option value='1' $choice1 >One Wey</option>";
		$response .= "<option value='2' $choice2 >Return</option>";
		
		return $response;
	}
	
}
//declare class 
$service = new Services;

?>