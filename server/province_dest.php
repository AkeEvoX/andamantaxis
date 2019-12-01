<?php ob_start(); ?>
<?php require_once('../include/connect.php'); ?>
<?php

$conn = new mysql;

	$location_src = $_POST["location1"];	
	
    if ($_POST["location_data"]!="undefined")
	  $location_src = $_POST["location_data"];	

	$selected = $_POST["province_data"];	
	
	
	$text = "<option value=\"\">--Filter by Province--</option>";
	
	$sql = "select p.* from travel_province p
where p.tprovince_id in (select tprovince_id from travel_location l
where l.tlocation_id in ( select r.tlocation_id_destination from travel_route r
where r.troute_status = 1 and r.tlocation_id_origin=$location_src
group by r.tlocation_id_destination)
group by l.tprovince_id); ";
	
	
	$conn->query($sql);
	while($row = $conn->fetchArray()){
      if ($selected == $row["tprovince_id"])
		$text .= "<option value=\"".$row['tprovince_id']."\" selected>".$row['tprovince_name']."</option>";
	  else
		$text .= "<option value=\"".$row['tprovince_id']."\">".$row['tprovince_name']."</option>";
	}
	
	echo $text;
?>
<?php ob_end_flush() ?>