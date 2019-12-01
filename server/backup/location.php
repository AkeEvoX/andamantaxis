<?php ob_start(); ?>
<?php require_once('../include/connect.php'); ?>
<?php

	$conn = new mysql;
	if ($_POST){
		$id = $_POST["province"];	
		
	   if ($_POST["province_data"]!="undefined")
		  $id = $_POST["province_data"];	
		
		$where = " and tprovince_id = '$id'";
		
		$selected = $_POST["location_data"];	
	}
	
	$text = "<option value=\"\">--Select Location--</option>";

	$sql = "select * from travel_location 
			where tlocation_status = 1
			 $where
			order by tlocation_name
		   ";
	$conn->query($sql);
	while($row = $conn->fetchArray()){
	  if ($selected == $row["tlocation_id"])
		$text .= "<option value=\"".$row['tlocation_id']."\" selected>".$row['tlocation_name']."</option>";
	  else
		$text .= "<option value=\"".$row['tlocation_id']."\">".$row['tlocation_name']."</option>";
	}
	
	echo $text;
?>
<?php ob_end_flush() ?>