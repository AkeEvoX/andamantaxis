<?php
	require_once('../managers/payments.php');
	require_once('../lib/common.php');
	session_start();
	
	$service_type = $_GET["action"];
	
	switch($service_type){
		case "alert":
			$manager = new $reservationManager();
			
			$result = $manager->GetReviewAlert();
			
			print_r($result);
			
		break;
		case "":
		
		break;
		default :
			echo "E404 : service not found.";
			exit();
		break;
	}

	
	//$manager = new ReservationManager();
	
	/*
	$reminder = $manager->GetReminderAlert();
	
	
	//foreach($item $
	
	print_r($reminder);
	*/

/*
	$sql = "select r.reserv_id,reserv_email 
			from reservation r
			inner join reservation_detail rd on rd.reserv_id = r.reserv_id
			where reserv_sendmail_alert = 0
			  and rdetail_date_origin <= (NOW() + INTERVAL 1 DAY)
			group by r.reserv_id";
			
	$conn = new mysql;
	$conn1 = new mysql;
	$conn2 = new mysql;
	
	$conn->query($sql);
	
	while($row = $conn->fetchArray()){
		
		// ## unmark send mail on deploy only  ##
		SendMail($row[1],$row[0],$conn1,$conn2,1); //### send mail reminder ###
		
		$sql2 = "update reservation 
				set reserv_sendmail_alert = 1
				where reserv_id = '".$row[0]."'";
		$conn2->query($sql2);
		//### wait next send mail; ###
		sleep(10);
	}
*/
	
	
	
?>