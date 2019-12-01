<?php ob_start(); ?>
<?php require_once('../include/connect.php'); ?>
<?php

$conn = new mysql;

	$province2 = $_POST["province2"];	
	$location1 = $_POST["location1"];	
	
    if ($_POST["province_data"]!="undefined")
	  $province2 = $_POST["province_data"];	
	  
    if ($_POST["location1_data"]!="undefined")
	  $location1 = $_POST["location1_data"];	

	$selected = $_POST["location_data"];	

	$text = "<option value=\"\">--Select Location--</option>";

	$sql = "select tlocation_id_origin location, tlocation_name from travel_route tr
			inner join travel_location tl on tr.tlocation_id_origin = tl.tlocation_id
			inner join travel_province tv on tv.tprovince_id = tl.tprovince_id
			where tv.tprovince_status = 1
			  and tl.tlocation_status = 1
			  and tr.tlocation_id_destination = '$location1'
			  and tv.tprovince_id = '$province2'
			UNION
			select tlocation_id_destination location, tlocation_name from travel_route tr
			inner join travel_location tl on tr.tlocation_id_destination = tl.tlocation_id
			inner join travel_province tv on tv.tprovince_id = tl.tprovince_id
			where tv.tprovince_status = 1
			  and tl.tlocation_status = 1
			  and tr.tlocation_id_origin = '$location1'
			  and tv.tprovince_id = '$province2'
			order by tlocation_name
		   ";
	$conn->query($sql);
	while($row = $conn->fetchArray()){
	  if ($selected == $row["location"])	
		$text .= "<option value=\"".$row['location']."\" selected>".$row['tlocation_name']."</option>";
	  else
		$text .= "<option value=\"".$row['location']."\">".$row['tlocation_name']."</option>";
	}
	
	echo $text;
?>
<?php ob_end_flush() ?>