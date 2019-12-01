<?php

$path = "http://127.0.0.1/andaman/";

$path = "http://www.andamantaxis.com/";
//****************************************************************************
function ChangeDateforMysql($fulldate){
	$month = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	
	$arr_fulldate = explode(" ",$fulldate);
	
	foreach($month as $index=>$value){
		if ($arr_fulldate[1]==$value){
			$arr_fulldate[1] = $index+1;
			break;
		}
	}
	
	$arr_fulldate[3] .= ":00";
	
	return "$arr_fulldate[2]/$arr_fulldate[1]/$arr_fulldate[0] $arr_fulldate[3]";
}
//****************************************************************************
//****************************************************************************
function ShowRoute($id,$conn){
	$sql = "select tlocation_name from travel_location 
			where tlocation_id = '$id'
			";
	$result = $conn->query($sql) or exit($conn->error);
	$row = $result->fetch_array();	
	return $row[0];
}
//****************************************************************************
function ShowDateTime($date){
	if ($date!="" && $date!="0000-00-00 00:00:00")
	return date("d M Y H:i",strtotime($date));
}
//****************************************************************************
function ShowLevel($level){
	if ($level == 2)
		$levelname  = "Manager";
	else
		$levelname  = "Staff";
	
	return $levelname;
}
//****************************************************************************
function ShowStatus($status){
	if ($status == 1)
		$statusname  = "Enabled";
	else
		$statusname  = "Disabled";	
	
	return $statusname;
}
//****************************************************************************
function ShowStatusReservation($status){
	if ($status == 1)
		$statusname  = "Reservation";
	elseif ($status == 2)
		$statusname  = "Paid";
	else
		$statusname  = "Disabled";
	
	return $statusname;
}
//****************************************************************************

?>