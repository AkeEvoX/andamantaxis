<?php
	require_once('../managers/reservations.php');
	require_once('../lib/common.php');
	session_start();
	
	$service_type = $_GET["action"];
	
	switch($service_type){
		case "remind":
		
			$manager = new ReservationManager();
			$result = $manager->GetReminderAlert();
			
			foreach($result["data"] as $item ){
				
				$result = $manager->GetReservInfo($item->id);
				$data = $reserve["data"];
				$sender = $item->email;
				$subject = '=?utf-8?B?'.base64_encode("Reminder Your Booking No.".$data->reserv_id." For Transportarion On ". $data->pickuptime).'?=';
				$message = generate_template_mail($data,"reminder");
				$attachment = "";
				
				
				//** skip mail when sender is empty. **
				if($sender=="") 
				{
					log_debug("skip mail remind id=" . $item->id ." because email is empty.");
					continue;
				}
				
				send_mail($sender,$subject,$message,$attachment);
				$manager->UpdateReminder($item->id);
				
				log_debug("mail remind id=".$item->id. ",mail to=".$sender);
				
				sleep(2);
			}
			$result = array("result"=>"mailing reminder has complete.");
			echo json_encode($result);
			
			
		break;
		case "review":
			$manager = new ReservationManager();
			$result = $manager->GetReviewAlert();
			
			foreach($result["data"] as $item){
				
				$reserve = $manager->GetReservInfo($item->id);
				$data = $reserve["data"];
				
				$sender = $item->email;
				$subject = '=?utf-8?B?'.base64_encode("Please review for Your Booking No.".$data->reserv_id." For Transportarion On ". $data->pickuptime).'?=';
				$message= generate_template_mail($data,"review");
				$attachment = "";
				
				//** skip mail when sender is empty. **
				if($sender=="") 
				{
					log_debug("skip mail review id=" . $item->id ." because email is empty.");
					continue;
				}
				
				send_mail($sender,$subject,$message,$attachment);
				$manager->UpdateReviewer($item->id);
				log_debug("mail review id=".$item->id. ",mail to=".$sender);
				
				sleep(2);
				
			}
			
			$result = array("result"=>"mailing review has complete.");
			echo json_encode($result);
				
		break;
		default :
			echo "E404 : service not found.";
			exit();
		break;
	}

	
?>