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
	return date("d M Y H:i",strtotime($date));
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


		//initial customer 
		/*
		$sql = "select * from reservation r
				inner join payment pay on pay.payment_id = r.reserv_payment
				where reserv_id = '$reserv_id'
				order by reserv_id";

		$conn->query($sql);
		$row = $conn->fetchArray();
							
		$date 	   = $row["reserv_date"];
		$firstname  = $row["reserv_firstname"];
		$lastname   = $row["reserv_lastname"];
		//$email   	= $row["reserv_email"];
		$mobile     = $row["reserv_mobile"];
		$detail     = $row["reserv_detail"];
		$address    = $row["reserv_address"];
		$zipcode    = $row["reserv_zipcode"];
		$payment    = $row["payment_name"];
		$amount  	 = $row["reserv_amount"];
		$status 	 = $row["reserv_status"];
		$flight = $row["flight_arrival_number"];
		$hotel = $row["hotel_name_destination"];
		*/

		//initial tranfer
		/*
		$sql = "select *
				from reservation r
				inner join reservation_detail rd on rd.reserv_id = r.reserv_id
				inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
				where rd.reserv_id = '$reserv_id'
				order by rdetail_id limit 1 ";
		*/
		$sql = "select *
		from reservation r
		inner join reservation_detail rd on rd.reserv_id = r.reserv_id
		inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
		inner join payment pay on pay.payment_id = r.reserv_payment
		where rd.reserv_id = '$reserv_id'
		order by rdetail_id limit 1 ";

		$conn->query($sql);
		$row = $conn->fetchArray();

		$date 	   = $row["reserv_date"];
		$firstname  = $row["reserv_firstname"];
		$lastname   = $row["reserv_lastname"];
		$email   	= $row["reserv_email"];
		$mobile     = $row["reserv_mobile"];
		$detail     = $row["reserv_detail"];
		$address    = $row["reserv_address"];
		$zipcode    = $row["reserv_zipcode"];
		$payment    = $row["payment_name"];
		$amount  	 = $row["reserv_amount"];
		$status 	 = $row["reserv_status"];
		$reserv_detail 	 = $row["reserv_detail"];
		$flight = $row["flight_arrival_number"];
		$hotel = $row["Hotel_name_destination"];
		$pick = $row["Hotel_name"];
		$from = showRoute($row["rdetail_origin"],$conn2);
		$to  = showRoute($row["rdetail_destination"],$conn2);
		$vehicle = $row["vtype_name"];//.' [Unit:'.number_format($row["rdetail_unit"]).']'
		$pickuptime = "Arrival : ".ShowDateTime($row["rdetail_date_origin"])."<br/>";
		$unit = number_format($row["rdetail_unit"]);
		$bound =$row["rdetail_bound"];
		$adults =$row["rdetail_adults_num"];
		$children =$row["rdetail_children_num"];
		$infants = $row["rdetail_infants_num"];

		if ($row["rdetail_date_origin"]!="")				  
			$pickuptime .= 'Dropoff : '.ShowDateTime($row["rdetail_date_destination"]);	

	if ($reminder == 0)
		$subject = '=?utf-8?B?'.base64_encode("Dear Guest, Thank you for your booking No.#".$reserv_id).'?=';
		
	else
		$subject = '=?utf-8?B?'.base64_encode("Reminder Reservation No.#".$reserv_id).'?=';

		$templete = file_get_contents('include/templete-payment.php');

		$templete = str_replace('#bookid',str_pad($reserv_id,5,"0",STR_PAD_LEFT),$templete);
		$templete = str_replace('#passenger',$firstname." ".$lastname,$templete);
		$templete = str_replace('#cash',number_format($amount,2),$templete);
		$templete = str_replace('#from',$from,$templete);
		$templete = str_replace('#to',$to,$templete);
		$templete = str_replace('#vehicle',$vehicle,$templete);
		$templete = str_replace('#pickuptime',$pickuptime,$templete);
		$templete = str_replace('#dropofftime',$dropofftime,$templete);
		$templete = str_replace('#mobile',$mobile,$templete);
		$templete = str_replace('#flight',$flight,$templete);
		$templete = str_replace('#hotel',$hotel,$templete);
		$templete = str_replace('#unit',$unit,$templete);
		$templete = str_replace('#bound',$bound,$templete);
		$templete = str_replace('#adults',$adults,$templete);
		$templete = str_replace('#children',$children,$templete);
		$templete = str_replace('#infants',$infants,$templete);		
		$templete = str_replace('#payment',$payment,$templete);
		$templete = str_replace('#pick',$pick,$templete);
	    $templete = str_replace('#reserv_detail',$reserv_detail,$templete);
		
		
	//### generate PDF File ###
	$pdf_dest = "temp_pdf\\";
	$pdf_name= $pdf_dest."vochur".$reserv_id.".pdf";


	$mpdf = new\Mpdf\Mpdf(["temp_pdf" => __DIR__."\\media"] );
	$mpdf->WriteHTML($templete);
	$mpdf->Output($pdf_name,"F");
	//### generate PDF File ###
		
		
		set_time_limit(180); // 3 min 
		$mail = new PHPMailer(true);
		$mail->IsSMTP();

		$mail->Subject = $subject;
		$mail->MsgHTML($templete);//body mail

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
		$mail->AddReplyTo("mail@andamantaxis.com", "admin");

		$mail->AddAddress($email); 

		$mail->Send();
		/*
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message sent!";
		}
		*/
		
}

function NotifyMail($sender,$subject,$message)
{
		$mail = new PHPMailer();

		$mail->IsSMTP();

		$mail->Subject = $subject;
		$mail->MsgHTML($message);//body mail

		$mail->CharSet = "utf-8";
		$mail->Host="smtp.andamantaxis.com";
		$mail->SMTPAuth = true;
		$mail->IsHTML(true);
		$mail->Username = "mail@andamantaxis.com"; 
		$mail->Password = "andamantaxis@2016"; 
		$mail->SetFrom("admin@andamantaxis.com", "Andamantaxis.com");
		$mail->AddBcc("web.andamantaxis@gmail.com", "notify to admin");
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

		$date 	   = $row["reserv_date"];
		$firstname  = $row["reserv_firstname"];
		$lastname   = $row["reserv_lastname"];
		$email   	= $row["reserv_email"];
		$mobile     = $row["reserv_mobile"];
		$detail     = $row["reserv_detail"];
		$address    = $row["reserv_address"];
		$zipcode    = $row["reserv_zipcode"];
		$payment    = $row["payment_name"];
		$amount  	 = $row["reserv_amount"];
		$status 	 = $row["reserv_status"];
		$reserv_detail 	 = $row["reserv_detail"];

		if(!$row["flight_arrival_number"]=="0")
			$flight = $row["flight_arrival_number"];
		
		$hotel = $row["Hotel_name_destination"];
		$pick = $row["Hotel_name"];
		$from = showRoute($row["rdetail_origin"],$conn);
		$to  = showRoute($row["rdetail_destination"],$conn);
		$vehicle = $row["vtype_name"];//.' [Unit:'.number_format($row["rdetail_unit"]).']'
		$pickuptime = "Pickup : ".ShowDateTime($row["rdetail_date_origin"])."<br/>";
		$dropofftime = "Dropoff : ".ShowDateTime($row["rdetail_date_destination"])."<br/>";
		$unit = number_format($row["rdetail_unit"]);
		$bound =$row["rdetail_bound"];
		$adults =$row["rdetail_adults_num"];
		$children =$row["rdetail_children_num"];
		$infants = $row["rdetail_infants_num"];

		if ($row["rdetail_date_origin"]!="")				  
			$pickuptime .= 'Dropoff : '.ShowDateTime($row["rdetail_date_destination"]);	


	$subject = '=?utf-8?B?'.base64_encode("Dear Guest, Thank you for your booking No.#".$reserv_id).'?=';
	$templete = file_get_contents('include/templete-interbank.php');

	$templete = str_replace('#bookid',str_pad($reserv_id,5,"0",STR_PAD_LEFT),$templete);
	$templete = str_replace('#passenger',$firstname." ".$lastname,$templete);
	$templete = str_replace('#cash',number_format($amount,2),$templete);
	$templete = str_replace('#from',$from,$templete);
	$templete = str_replace('#to',$to,$templete);
	$templete = str_replace('#vehicle',$vehicle,$templete);
	$templete = str_replace('#pickuptime',$pickuptime,$templete);
	$templete = str_replace('#dropofftime',$dropofftime,$templete);
	$templete = str_replace('#mobile',$mobile,$templete);
	$templete = str_replace('#flight',$flight,$templete);
	$templete = str_replace('#hotel',$hotel,$templete);
	$templete = str_replace('#unit',$unit,$templete);
	$templete = str_replace('#bound',$bound,$templete);
	$templete = str_replace('#adults',$adults,$templete);
	$templete = str_replace('#children',$children,$templete);
	$templete = str_replace('#infants',$infants,$templete);		
	$templete = str_replace('#payment',$payment,$templete);
	$templete = str_replace('#pick',$pick,$templete);
	$templete = str_replace('#reserv_detail',$reserv_detail,$templete);

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Subject = $subject;
	$mail->MsgHTML($templete);//body mail
	$mail->CharSet = "utf-8";
	$mail->Host="smtp.andamantaxis.com";
	$mail->SMTPAuth = true;
	$mail->IsHTML(true);
	$mail->Username = "mail@andamantaxis.com"; 
	$mail->Password = "andamantaxis@2016"; 
	$mail->SetFrom("mail@andamantaxis.com", "Andamantaxis.com");
	$mail->AddBcc("web.andamantaxis@gmail.com", "notify to admin");
	$mail->AddReplyTo("mail@andamantaxis.com", "admin");
	$mail->AddAddress($email); 

	$mail->Send();
}

// send mail after purchase paypal  has complete.;;
function complete_payment($reserv_id,$conn)
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
		
		$date 	   = $row["reserv_date"];
		$firstname  = $row["reserv_firstname"];
		$lastname   = $row["reserv_lastname"];
		$email   	= $row["reserv_email"];
		$mobile     = $row["reserv_mobile"];
		$detail     = $row["reserv_detail"];
		$address    = $row["reserv_address"];
		$zipcode    = $row["reserv_zipcode"];
		$payment    = $row["payment_name"];
		$amount  	 = $row["reserv_amount"];
		$status 	 = $row["reserv_status"];
		$reserv_detail 	 = $row["reserv_detail"];

		if(!$row["flight_arrival_number"]=="0")
			$flight = $row["flight_arrival_number"];
		
		$hotel = $row["Hotel_name_destination"];
		$pick = $row["Hotel_name"];
		$from = showRoute($row["rdetail_origin"],$conn);
		$to  = showRoute($row["rdetail_destination"],$conn);
		$vehicle = $row["vtype_name"];//.' [Unit:'.number_format($row["rdetail_unit"]).']'
		$pickuptime = ShowDateTime($row["rdetail_date_origin"])."<br/>";//full datetime
		$pickdate = showDate($row["rdetail_date_origin"]);
		$picktime = showTime($row["rdetail_date_origin"]);
		$dropofftime = ShowDateTime($row["rdetail_date_destination"])."<br/>";
		$unit = number_format($row["rdetail_unit"]);
		$bound =$row["rdetail_bound"];
		$adults =$row["rdetail_adults_num"];
		$children =$row["rdetail_children_num"];
		$infants = $row["rdetail_infants_num"];
		
		
		if ($row["rdetail_date_origin"]!="")				  
			$dropofftime = ShowDateTime($row["rdetail_date_destination"]);	
			//$pickuptime .= 'Dropoff : '.ShowDateTime($row["rdetail_date_destination"]);	
	//echo "initial data <br/>";
	
	$pickuptime = str_replace("<br/>","",$pickuptime);
	$from = str_replace("<br/>","",$from);

	$subject = '=?utf-8?B?'.base64_encode("Your Trans new booking ".str_pad($reserv_id,5,"0",STR_PAD_LEFT)." - ".$pickuptime." , ".$from." to ".$to).'?=';
	
	$templete = file_get_contents('include/templete-voucher.php');

	$templete = str_replace('#bookid',str_pad($reserv_id,5,"0",STR_PAD_LEFT),$templete);
	$templete = str_replace('#passenger',$firstname." ".$lastname,$templete);
	$templete = str_replace('#email',$email,$templete);
	$templete = str_replace('#cash',number_format($amount,2),$templete);
	$templete = str_replace('#from',$from,$templete);
	$templete = str_replace('#to',$to,$templete);
	$templete = str_replace('#vehicle',$vehicle,$templete);
	$templete = str_replace('#pickdate',$pickdate,$templete);
	$templete = str_replace('#picktime',$picktime,$templete);
	$templete = str_replace('#pickuptime',$pickuptime,$templete);
	$templete = str_replace('#dropofftime',$dropofftime,$templete);
	$templete = str_replace('#mobile',$mobile,$templete);
	$templete = str_replace('#flight',$flight,$templete);
	$templete = str_replace('#hotel',$hotel,$templete);
	$templete = str_replace('#unit',$unit,$templete);
	$templete = str_replace('#bound',$bound,$templete);
	$templete = str_replace('#adults',$adults,$templete);
	$templete = str_replace('#children',$children,$templete);
	$templete = str_replace('#infants',$infants,$templete);		
	$templete = str_replace('#payment',$payment,$templete);
	$templete = str_replace('#pick',$pick,$templete);
	$templete = str_replace('#reserv_detail',$reserv_detail,$templete);
	
	
	//echo "initial mail template <br/>";
	//echo $templete;
	//exit();
	//echo "initial data <br/>";
	
	//### generate PDF File ###
	$pdf_dest = "temp_pdf\\";
	$pdf_name= $pdf_dest."vochur_".str_pad($reserv_id,5,"0",STR_PAD_LEFT)."_".gettimeofday()['usec'].".pdf";


	$mpdf = new\Mpdf\Mpdf(["temp_pdf" => __DIR__."\\media"
										,"default_font_size"=>9
										,"default_font"=>"tahoma"
										,[220, 297]
										] );
										
	$mpdf->WriteHTML($templete);
	$mpdf->Output($pdf_name,"F");
	//### generate PDF File ###
	
	
	//echo "<script>window.open('".$pdf_name.",'_self')';</script>";
	
	## template body mail ##
	
	$template_body = file_get_contents('include/templete-mail.php');
	$template_body = str_replace('#bookid',str_pad($reserv_id,5,"0",STR_PAD_LEFT),$template_body);
	$template_body = str_replace('#pickdate',$pickdate,$template_body);
	$template_body = str_replace('#picktime',$picktime,$template_body);
	$template_body = str_replace('#from',$from,$template_body);
	$template_body = str_replace('#to',$to,$template_body);
	#
	#

	try{
		
		
		$email = "svargalok@gmail.com";
		
		//echo "start mail send \n";
		set_time_limit(180); // 3 min 
		
		$mail = new PHPMailer(true);
		$mail->IsSMTP();
		$mail->Subject = $subject;
		$mail->MsgHTML($template_body);//body mail
		//$mail->MsgHTML("hello send mail.");
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
		//$mail->AddBcc("web.andamantaxis@gmail.com", "notify to admin");
		$mail->AddReplyTo("mail@andamantaxis.com", "admin");
		$mail->AddAddress($email); 

		//$mail->Send();
		
		//if(!$mail->Send())
			 //echo "Mailer Error: " . $mail->ErrorInfo;
		//else
			//echo "end mail message sent OK!! \n";
		
	}
	catch (phpmailerException $e){
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	}
	catch(Exception $e){
		echo $e->getMessage(); //Boring error messages from anything else!
	}
		
}

?>
<?php require_once("send_var.php"); ?>
<?php
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
		
		SendMail($row[1],$row[0],$conn1,$conn2,1);
		
		$sql2 = "update reservation 
				set reserv_sendmail_alert = 1
				where reserv_id = '".$row[0]."'";
		$conn2->query($sql2);
	}
?>