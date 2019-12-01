<link rel="stylesheet" href="https://www.andamantaxis.com/css/ch/bootstrap.css">
    <link rel="stylesheet" href="https://www.andamantaxis.com/css/ch/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="https://www.andamantaxis.com/css/ch/animate.css">
    <link rel="stylesheet" href="https://www.andamantaxis.com/css/ch/templatemo-misc.css">
    <link rel="stylesheet" href="https://www.andamantaxis.com/css/ch/templatemo-style.css">
    <link rel="stylesheet" href="https://www.andamantaxis.com/css/css1.css">
        <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://www.andamantaxis.com/assets/css/bootstrap.min.css" type="text/css" media="screen">
<?php
require_once('class.phpmailer.php');
require_once 'vendor/autoload.php';
date_default_timezone_set('America/Los_Angeles');


function changeDateShow($date){
	$month = array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	
	$returnDate =  date("d ",strtotime($date));
	$returnDate .=  $month[date("n",strtotime($date))];
	$returnDate .=  " ".(date("Y",strtotime($date))+543);
	
	return $returnDate;
}
/////////////////////////////////////////////

function changeDateMonthShow($date){
	$month = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

	$arr_date = explode("-",$date);
	
	return $arr_date[0]." ".$month[$arr_date[1]-1]." ".$arr_date[2];
}
/////////////////////////////////////////////

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
//*********************************************
function changeTimeShow($date){	
	$pos = strrpos($date," ")+1;
	return substr($date,$pos,5);
}
//*********************************************
function saveDate($date,$time){
	$arr_date = explode("-",$date);
	$date = "$arr_date[2]-$arr_date[1]-$arr_date[0]";
	return 	"$date $time:00";
}
//*********************************************
function showDate($datetime){
	$arr_datetime = explode(" ",$datetime);
	return 	date("d-m-Y",strtotime($arr_datetime[0]));
}
//*********************************************
function showTime($datetime){
	$arr_datetime = explode(" ",$datetime);
	$arr_time = explode(":",$arr_datetime[1]);
	return 	$arr_time[0].":".str_pad($arr_time[1],2,"0");
}
//*********************************************
function ShowDateTime($date){
	if ($date!="" && $date!="0000-00-00 00:00:00")
	return date("d F Y , H:i",strtotime($date));
}
//*********************************************
function checkEmail($email){
	return eregi("^[a-zA-Z0-9]([a-zA-Z0-9._]{0,})+@[a-zA-Z0-9][a-zA-Z0-9._]+\.([a-zA-Z]{2,4})$",$email);	
}
//*********************************************
function checkStationSort($station){
	$conn = new mysql;
	
	$sql = "select station_sort from station 
			where station_id = '$station'";
	$conn->query($sql);
	$row = $conn->fetchArray();
		return $row[0];	
}
//*********************************************
function showStationName($station){
	$conn = new mysql;
	
	$sql = "select station_name from station 
			where station_id = '$station'";
	$conn->query($sql);
	$row = $conn->fetchArray();
		return $row[0];	
}
//*********************************************
function showStationNameSort($station,$route){
	$conn = new mysql;
	
	$sql = "select station_name from station 
			where station_sort = '$station'
			  and route_id = '$route'";
	$conn->query($sql);
	$row = $conn->fetchArray();
		return $row[0];	
}
//*********************************************
function checkPrice($start,$end,$route){
	$conn = new mysql;
	
	$sql = "select cost_amount from cost 
			where route_id = '$route'
			  and ((station_start = '$start' and station_end = '$end')
			   or (station_start = '$end' and station_end = '$start'))";
	$conn->query($sql);
	$row = $conn->fetchArray();
		return $row[0];	
}
//*********************************************
function showstation($route){
	$conn = new mysql;
	$return = "";
	
	$sql = "select station_name from station 
		    where route_id = '$route'
			 and station_status = 1
		    order by station_sort";
	$conn->query($sql);
	while($row = $conn->fetchArray()){
		 $return .= $row[0]."->";
	}
	return substr($return,0,strlen($return)-2);
}
//*********************************************
function showstatus1($status){
	if ($status == 1)
		return "แสดง";
	else
		return "ยกเลิก";	
}
//*********************************************
function showstatus2($status){
	if ($status == 1)
		return "พร้อม";
	if ($status == 2)
		return "กำลังเดินทาง";
	if ($status == 3)
		return "ถึงปลายทาง";
	else
		return "ยกเลิก";	
}
//*********************************************
//************************************
function alertback($word){
	exit("<script>
		 	alert('$word');
			history.back();
		 </script>");
}
//************************************
function alertgo($word,$url){
	
	exit("<script>
		 	alert('$word');
			window.location='$url';
		 </script>");
	
	}
//************************************
function go($url){
	
	exit("<script>
			window.location='$url';
		 </script>");
	
	}
//************************************
function alert($word){
	exit("<script>
		 	alert('$word');
		 </script>");
}
//************************************
	//***************************************************************************
	function showlocation($id){
		$sql = "select * from travel_location 
				where tlocation_id = '$id'";
		$result = mysql_query($sql) or exit($sql);
		$row = mysql_fetch_array($result);
		
		return $row["tlocation_name"];
	}
///////////////////////////////////////

	function showvehicle($id){
		$sql = "select * from vehicle_type 
				where vtype_id = '$id'";
		$result = mysql_query($sql) or exit($sql);
		$row = mysql_fetch_array($result);
		
		return $row["vtype_name"];
	}
///////////////////////////////////////

	function showprovince($id){
		$sql = "select * from travel_province 
				where tprovince_id = '$id'";
		$result = mysql_query($sql) or exit($sql);
		$row = mysql_fetch_array($result);
		
		return $row["tprovince_name"];
	}
	
//////////////////////////////////////////
function ShowStatusReservation($status){
	if ($status == 1)
		$statusname  = "Reservation";
	elseif ($status == 2)
		$statusname  = "Paid";
	else
		$statusname  = "Disabled";
	
	return $statusname;
}
//////////////////////////////////////////
function ShowRoute($id,$conn){
	$sql = "select tlocation_name from travel_location 
			where tlocation_id = '$id'
			";
	$conn->query($sql);
	$row = $conn->fetchArray();	
	return $row[0];
}
//****************************************************************************
//# send mail for payment with paypal 
function SendMail($email,$reserv_id,$conn,$conn2,$reminder=0){


	$sql = "select *
	from reservation r
	inner join reservation_detail rd on rd.reserv_id = r.reserv_id
	inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
	inner join payment pay on pay.payment_id = r.reserv_payment
	where rd.reserv_id = '$reserv_id'
	limit 1 ";

	$conn->query($sql);
	$row = $conn->fetchArray();
		
	//### declare variable ###
	$items = declare_items($row,$conn);

	//### generate PDF File ###
	$pdf_name = generate_pdf($items);
	

	switch($reminder)
	{
		case 0 : //booking
			//$subject = '=?utf-8?B?'.base64_encode("Dear Guest, Thank you for your booking No.#".$items->reserv_id).'?=';
			$subject = '=?utf-8?B?'.base64_encode("Pending Paypal : Booking No. ".$items->reserv_id." - ".$items->pickuptime." for ".$items->from." to ".$items->to).'?=';
			$template_mail = generate_template_mail($items,"paypal");
		break;
		case 1 : //reminder
			$subject = '=?utf-8?B?'.base64_encode("Reminder Your Booking No.".$items->reserv_id." For Transportarion On ". $items->pickuptime).'?=';
			$template_mail = generate_template_mail($items,"reminder");
		break;
		case 2 : //payment complete
			$subject = '=?utf-8?B?'.base64_encode("Confirmed Booking No. ".$items->reserv_id." - ".$items->pickuptime." for ".$items->from." to ".$items->to).'?=';
			$template_mail = generate_template_mail($items,"paypal");
		break;
	}
	
		//###  Generate Template Mail for pay with driver on  arraival ###
		//$template_mail = generate_template_mail($items,"paypal");
	
		
		set_time_limit(180); // 3 min 
		$mail = new PHPMailer(true);
		$mail->IsSMTP();

		$mail->Subject = $subject;
		$mail->MsgHTML($template_mail);//body mail

		$mail->CharSet = "utf-8";
		$mail->Host="smtp.andamantaxis.com";
		$mail->SMTPAuth = true;
		$mail->SMTPKeepAlive = true;  // don't close the connection between messages
		$mail->Timeout = 120 ; // set the timeout (seconds)
		$mail->IsHTML(true);
		$mail->Username = "mail@andamantaxis.com"; 
		$mail->Password = "andamantaxis@2016"; 
		
		if($reminder!=1)  // attachment for booking or payment complete. 
			$mail->addAttachment($pdf_name);
		
		$mail->SetFrom("mail@andamantaxis.com", "Andamantaxis.com");
		$mail->AddBcc("web.andamantaxis@gmail.com", "notify to admin");
		$mail->AddBcc("mail@andamantaxis.com", "monitor");
		$mail->AddReplyTo("mail@andamantaxis.com", "admin");
		
		// ### send mail out when customer payment complete or reminder only.
		if($reminder!=0) 
			$mail->AddAddress($items->email); 

		//$mail->Send();
		
		if(!$mail->Send()) 
			echo "Mailer Error: " . $mail->ErrorInfo;
		
		
}

function NotifyMail($sender,$subject,$message)
{
	
		set_time_limit(180); // 3 min 
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Subject = $subject;
		$mail->MsgHTML($message);//body mail
		$mail->CharSet = "utf-8";
		$mail->Host="smtp.andamantaxis.com";
		$mail->SMTPAuth = true;
		$mail->SMTPKeepAlive = true;  // don't close the connection between messages
		$mail->Timeout = 120 ; // set the timeout (seconds)
		$mail->IsHTML(true);
		$mail->Username = "mail@andamantaxis.com"; 
		$mail->Password = "andamantaxis@2016"; 
		$mail->SetFrom("admin@andamantaxis.com", "Andamantaxis.com");
		$mail->AddBcc("web.andamantaxis@gmail.com", "notify to admin");
		$mail->AddBcc("mail@andamantaxis.com", "monitor");
		$mail->AddReplyTo("mail@andamantaxis.com", "admin");

		$mail->AddAddress($sender); 

		//$mail->Send();
		
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "<script>alert('Send mail completed');</script";
		}
}

//confirm payment with account balance
function confirmpayment($reserv_id,$conn)
{


	//initial tranfer
	$sql = "select *
			from reservation r
			inner join reservation_detail rd on rd.reserv_id = r.reserv_id
			inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
			inner join payment pay on pay.payment_id = r.reserv_payment
			where rd.reserv_id = '$reserv_id'
			order by rdetail_id limit 1 ";

	$conn->query($sql);
	$row = $conn->fetchArray();
	
	//### declare variable ###
	$items = declare_items($row,$conn);

	//### generate PDF File ###
	$pdf_name = generate_pdf($items);
	
	//$subject = '=?utf-8?B?'.base64_encode("Dear Guest, Thank you for your booking No.#".$items->reserv_id).'?=';
	
	$subject = '=?utf-8?B?'.base64_encode("Booking No. ".$items->reserv_id." - ".$items->pickuptime." for ".$items->from." to ".$items->to).'?=';
	
	//###  Generate Template Mail for pay with driver on  arraival ###
	$template_mail = generate_template_mail($items,"cash");
	
	set_time_limit(180); // 3 min 

	$mail = new PHPMailer(true);
	$mail->IsSMTP();
	$mail->Subject = $subject;
	$mail->MsgHTML($template_mail);//body mail
	$mail->CharSet = "utf-8";
	$mail->Host="smtp.andamantaxis.com";
	$mail->SMTPAuth = true;
	$mail->SMTPKeepAlive = true;  // don't close the connection between messages
	$mail->Timeout = 120 ; // set the timeout (seconds)
	$mail->IsHTML(true);
	$mail->Username = "mail@andamantaxis.com"; 
	$mail->Password = "andamantaxis@2016"; 
	$mail->addAttachment($pdf_name);
	$mail->SetFrom("mail@andamantaxis.com", "Andamantaxis.com");
	$mail->AddBcc("web.andamantaxis@gmail.com", "notify to admin");
	$mail->AddBcc("mail@andamantaxis.com", "monitor");
	$mail->AddReplyTo("mail@andamantaxis.com", "admin");
	$mail->AddAddress($items->email); 

	$mail->Send();
}



function generate_pdf($items){
	
	//#####		Template PDF 	#####
	
	switch($items->transferType){
		case "1": //one way
			$templete = file_get_contents('include/templete-voucher_oneway.php');
		break;
		case "2"://round trip
			$templete = file_get_contents('include/templete-voucher.php');
		break;
	}
	//$templete = file_get_contents('include/templete-voucher.php');

	$templete = str_replace('#bookid',$items->reserv_id,$templete);
	$templete = str_replace('#passenger',$items->firstname." ".$items->lastname,$templete);
	$templete = str_replace('#email',$items->email,$templete);
	$templete = str_replace('#cash',number_format($items->amount,2),$templete);
	$templete = str_replace('#from',$items->from,$templete);
	$templete = str_replace('#to',$items->to,$templete);
	$templete = str_replace('#vehicle',$items->vehicle,$templete);
	$templete = str_replace('#pickup_dropoff_time',$items->pickup_dropoff_time ,$templete);
	$templete = str_replace('#pickdate',$items->pickdate,$templete);
	$templete = str_replace('#picktime',$items->picktime,$templete);
	$templete = str_replace('#dropdate',$items->dropdate,$templete);
	$templete = str_replace('#droptime',$items->droptime,$templete);
	$templete = str_replace('#mobile',$items->mobile,$templete);
	$templete = str_replace('#flight_arrival',$items->flight_arrival,$templete);
	$templete = str_replace('#flight_departure',$items->flight_departure,$templete);
	$templete = str_replace('#hotel_pickup',$items->hotel_pickup,$templete);
	$templete = str_replace('#hotel_dropoff',$items->hotel_dropoff,$templete);
	$templete = str_replace('#unit',$items->unit,$templete);
	$templete = str_replace('#bound',$items->bound,$templete);
	$templete = str_replace('#adults',$items->adults,$templete);
	$templete = str_replace('#children',$items->children,$templete);
	$templete = str_replace('#infants',$items->infants,$templete);		
	$templete = str_replace('#payment',$items->payment,$templete);
	$templete = str_replace('#reserv_detail',$items->reserv_detail,$templete);
	
	//### generate PDF File ###
	$pdf_dest = "temp_pdf/";
	$pdf_name= $pdf_dest."vochur_".$items->reserv_id."_".gettimeofday()['usec'].".pdf";


	$mpdf = new\Mpdf\Mpdf(["temp_pdf" => __DIR__."\\media"
										,"default_font_size"=>9
										,"default_font"=>"tahoma"
										,[220, 297]
										] );
										
	$mpdf->WriteHTML($templete);
	$mpdf->Output($pdf_name,"F");
	
	
	return $pdf_name;
	
}

function generate_template_mail($items,$type_mail){
	
	$departureInfo = "";
	
	switch($type_mail){
		case "cash":
			$template_mail = file_get_contents('include/templete-interbank.php');
			if($items->transferType=="2") //type 2 is transport round trip.
				$departureInfo = getDepartureInfo($items);
		break;
		case "paypal":
			$template_mail = file_get_contents('include/templete-payment.php');
			if($items->transferType=="2") //type 2 is transport round trip.
				$departureInfo = getDepartureInfo($items);
		break;
		case "reminder":
			$template_mail = file_get_contents('include/templete-reminder.php');
			if($items->transferType=="2") //type 2 is transport round trip.
				$departureInfo = getDepartureInfoReminder($items);
		break;
		case "review":
			$template_mail = file_get_contents('include/templete-review.php');
		break;
		
	}
	
	
	$template_mail = str_replace('#bookid',$items->reserv_id,$template_mail);
	$template_mail = str_replace('#passenger',$items->firstname." ".$items->lastname,$template_mail);
	$template_mail = str_replace('#cash',number_format($items->amount,2),$template_mail);
	$template_mail = str_replace('#from',$items->from,$template_mail);
	$template_mail = str_replace('#to',$items->to,$template_mail);
	$template_mail = str_replace('#vehicle',$items->vehicle,$template_mail);
	$template_mail = str_replace('#pickup_dropoff_time',$items->pickup_dropoff_time ,$template_mail);
	$template_mail = str_replace('#pickup_datetime',$items->pickuptime,$template_mail);
	$template_mail = str_replace('#pickdate',$items->pickdate,$template_mail);
	$template_mail = str_replace('#picktime',$items->picktime,$template_mail);
	$template_mail = str_replace('#dropoff_datetime',$items->dropofftime,$template_mail);
	$template_mail = str_replace('#dropdate',$items->dropdate,$template_mail);
	$template_mail = str_replace('#droptime',$items->droptime,$template_mail);	
	$template_mail = str_replace('#mobile',$items->mobile,$template_mail);
	$template_mail = str_replace('#flight_arrival',$items->flight_arrival,$template_mail);
	$template_mail = str_replace('#flight_departure',$items->flight_departure,$template_mail);
	$template_mail = str_replace('#hotel_pickup',$items->hotel_pickup,$template_mail);
	$template_mail = str_replace('#hotel_dropoff',$items->hotel_dropoff,$template_mail);
	$template_mail = str_replace('#unit',$items->unit,$template_mail);
	$template_mail = str_replace('#bound',$items->bound,$template_mail);
	$template_mail = str_replace('#adults',$items->adults,$template_mail);
	$template_mail = str_replace('#children',$items->children,$template_mail);
	$template_mail = str_replace('#infants',$items->infants,$template_mail);		
	$template_mail = str_replace('#payment',$items->payment,$template_mail);
	$template_mail = str_replace('#departureInfo',$departureInfo,$template_mail);
	$template_mail = str_replace('#reserv_detail',$items->reserv_detail,$template_mail);
	
	return $template_mail;
}

function getDepartureInfo($items){
	
	$departure = "<p >
	Date : ".$items->dropdate."<br/>
	Time : ".$items->droptime."<br/>
	Flight Departure Number : ".$items->flight_arrival."<br/>
	From : ".$items->to."<br/>
	To : ".$items->from."</br>
	</p>";

	return $departure;
	
}

function getDepartureInfoReminder($items){
	$departure = "<p >
2) On Date : ". $items->dropofftime ."<br/>
Pick-up from : <b>".$items->to."</b> to <b>".$items->from."</b> <br/>
</p>
	";
	
	return $departure;
}

//// used for email template //// 
function declare_items($row,$conn){
	
	$items = new StdClass();
		
	$items->reserv_id = str_pad($row["reserv_id"],5,"0",STR_PAD_LEFT);
	$items->date 	   = $row["reserv_date"];
	$items->firstname  = $row["reserv_firstname"];
	$items->lastname   = $row["reserv_lastname"];
	$items->email   	= $row["reserv_email"];
	$items->mobile     = $row["reserv_mobile"];
	$items->transferType     = $row["rdetail_bound"]; //transfer type => 1 ) one way 2) round trip
	$items->address    = $row["reserv_address"];
	$items->zipcode    = $row["reserv_zipcode"];
	$items->payment    = $row["payment_name"];
	$items->amount  	 = $row["reserv_amount"];
	$items->status 	 = $row["reserv_status"];
	$items->reserv_detail = $row["reserv_detail"];
	

	if(!$row["flight_arrival_number"]=="0")
	{
		$items->flight_arrival = $row["flight_arrival_number"];
		$items->flight_departure = $row["flight_departure_number"];
	}else{
		$items->flight_arrival = "-";
		$items->flight_departure ="-";
	}
	
	$items->hotel_pickup = $row["Hotel_name"];
		if($items->hotel_pickup=="") $items->hotel_pickup="-";
	
	$items->hotel_dropoff= $row["Hotel_name_destination"];		
		if($items->hotel_dropoff=="") $items->hotel_dropoff="-";
	
	
	$items->from = showRoute($row["rdetail_origin"],$conn);
	$items->to  = showRoute($row["rdetail_destination"],$conn);
	$items->vehicle = $row["vtype_name"];//.' [Unit:'.number_format($row["rdetail_unit"]).']'
	$items->pickuptime = ShowDateTime($row["rdetail_date_origin"]);
	$items->dropofftime = ShowDateTime($row["rdetail_date_destination"]);
	$items->unit = number_format($row["rdetail_unit"]);
	$items->bound =$row["rdetail_bound"];
	$items->adults =$row["rdetail_adults_num"];
	$items->children =$row["rdetail_children_num"];
	$items->infants = $row["rdetail_infants_num"];
	$items->pickdate = showDate($row["rdetail_date_origin"]);
	$items->picktime = showTime($row["rdetail_date_origin"]);
	$items->dropdate =  showDate($row["rdetail_date_destination"]);
	$items->droptime = showTime($row["rdetail_date_destination"]);
	
	return $items;
	
}

?>
<?php require_once("send_var.php"); ?>
<?php

$conn = new mysql;
/*
	
	
	$sql = "select r.reserv_id,reserv_email 
			from reservation r
			inner join reservation_detail rd on rd.reserv_id = r.reserv_id
			where reserv_sendmail_alert = 0
			AND  TIMESTAMPDIFF(HOUR,rd.rdetail_date_origin ,now()) >= -24
			AND (r.reserv_payment =1 OR r.reserv_status=2 )
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
		//sleep(5);
	}
	*/
	
	
	
	
?>