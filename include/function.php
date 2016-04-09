<link rel="stylesheet" type="text/css" href="../backend/css/style.css">

<?php
require_once('class.phpmailer.php');
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
function showTime($datetime){
	$arr_datetime = explode(" ",$datetime);
	return 	date("d-m-Y",strtotime($arr_datetime[0]));
}
//*********************************************
function showDate($datetime){
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
function SendMail($email,$reserv_id,$conn,$conn2,$reminder=0){


		//initial customer 
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

		//initial tranfer
		$sql = "select *
				from reservation r
				inner join reservation_detail rd on rd.reserv_id = r.reserv_id
				inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
				where rd.reserv_id = '$reserv_id'
				order by rdetail_id limit 1 ";

		$conn->query($sql);
		$row = $conn->fetchArray();


		$from = showRoute($row["rdetail_origin"],$conn2);
		$to  = showRoute($row["rdetail_destination"],$conn2);
		$vehicle = $row["vtype_name"].' [Unit:'.number_format($row["rdetail_unit"]).']';
		$pickuptime = ShowDateTime($row["rdetail_date_origin"]);

		if ($row["rdetail_date_origin"]!="")				  
			$pickuptime .= '/'.ShowDateTime($row["rdetail_date_origin"]);	

         

	if ($reminder == 0)
		$subject = '=?utf-8?B?'.base64_encode("Confirm Reservation No.#".$reserv_id).'?=';
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
		$mail->AddBcc("Andamantaxis@gmail.com", "notify to admin");
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
		
		/*
		$headers = 'From: admin@andamantaxis.com'."\r\n" ;
		$headers .= 'Bcc: andamantaxis@gmail.com'."\r\n" ;
		$headers .= 'X-Mailer: PHP/' . phpversion()."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n"; 
		*/
		//@mail($email,$subject,$message,$headers);	
}
//****************************************************************************
function SendMailOld($email,$reserv_id,$conn,$conn2,$reminder=0){
	if ($reminder == 0)
		$subject = '=?utf-8?B?'.base64_encode("Confirm Reservation No.#".$reserv_id).'?=';
	else
		$subject = '=?utf-8?B?'.base64_encode("Reminder Reservation No.#".$reserv_id).'?=';
		
		$message = '<img src="http://andamantaxis.com/images/logo.png"><br>
				<table id="postTable" width="800" border="1" bordercolor="#999999">
                <tr cos class="headTable">
                  <td class="postHead textCenter" colspan="2">';
				  
		$sql = "select * from reservation r
				inner join payment pay on pay.payment_id = r.reserv_payment
				where reserv_id = '$reserv_id'
				order by reserv_id";
		$conn->query($sql);
		$row = $conn->fetchArray();
							
		$date 	   = $row["reserv_date"];
		$firstname  = $row["reserv_firstname"];
		$lastname   = $row["reserv_lastname"];
		$email   	  = $row["reserv_email"];
		$mobile     = $row["reserv_mobile"];
		$detail     = $row["reserv_detail"];
		$address    = $row["reserv_address"];
		$zipcode    = $row["reserv_zipcode"];
		$payment    = $row["payment_name"];
		$amount  	 = $row["reserv_amount"];
		$status 	 = $row["reserv_status"];
         
        $message .= 'Reservation ID:#'.str_pad($reserv_id,5,"0",STR_PAD_LEFT).'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Customer Name</td>
                  <td class="whiteBG">'.$firstname." ".$lastname.'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Email</td>
                  <td class="whiteBG">'.$email.'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Mobile</td>
                  <td class="whiteBG">'.$mobile.'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Address</td>
                  <td class="whiteBG">'.nl2br($address).'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Zipcode</td>
                  <td class="whiteBG">'.$zipcode.'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Detail</td>
                  <td class="whiteBG">'.nl2br($detail).'</td>
                </tr>
                <tr class="headTable">
                  <td colspan="2" class="whiteBG"><table width="98%" border="0" align="center" cellpadding="1" cellspacing="2" bgcolor="#999999">
                    <tr bgcolor="#CCFFCC">
                      <th width="6%" bgcolor="#ECFFEC" scope="col">No.</th>
                      <th bgcolor="#ECFFEC" scope="col">Route</th>
                      <th width="15%" bgcolor="#ECFFEC" scope="col">Inbound</th>
                      <th width="15%" bgcolor="#ECFFEC" scope="col">Inbound</th>
                      <th width="12%" bgcolor="#ECFFEC" scope="col">Vehicle</th>
                      <th width="6%" bgcolor="#ECFFEC" scope="col">Unit</th>
                      <th width="12%" bgcolor="#ECFFEC" scope="col">Amount(Baht)</th>
                    </tr>';
					
			$sql = "select *
					from reservation r
					inner join reservation_detail rd on rd.reserv_id = r.reserv_id
					inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
					where rd.reserv_id = '$reserv_id'
					order by rdetail_id";
			$conn->query($sql);
			while($row = $conn->fetchArray()){

             $message .='<tr bgcolor="#FFFFFF">
                      <td class="textCenter">'.++$no.'</td>
                      <td>'.showRoute($row["rdetail_origin"],$conn2).' - '.showRoute($row["rdetail_destination"],$conn2) .'</td>
                      <td align="center">'.ShowDateTime($row["rdetail_date_origin"]).'</td>
                      <td align="center">'.ShowDateTime($row["rdetail_date_destination"]).'</td>
                      <td align="center">'.$row["vtype_name"].'</td>
                      <td align="center">'. number_format($row["rdetail_unit"]).'</td>
                      <td align="right">'. number_format($row["rdetail_amount"]*$row["rdetail_unit"],2).'&nbsp;</td>
                    </tr>';
					
             }
               
			 $message .= '<tr bgcolor="#FFFFFF">
                      <th colspan="6" align="right" bgcolor="#ECFFEC">Total Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <td align="right" bgcolor="#ECFFEC"><em><strong>'. number_format($amount,2).'</strong>&nbsp;</em></td>
                    </tr>
                  </table></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Payment</td>
                  <td class="whiteBG">'.$payment.'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Reservation Date</td>
                  <td class="whiteBG">'. ShowDateTime($date) .'</td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Status</td>
                  <td class="whiteBG">'. ShowStatusReservation($status) .'</td>
                </tr>
              </table>';	
	
		$headers = 'From: admin@andamantaxis.com'."\r\n" ;
		$headers .= 'Bcc: andamantaxis@gmail.com'."\r\n" ;
		$headers .= 'X-Mailer: PHP/' . phpversion()."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n"; 
			
		@mail($email,$subject,$message,$headers);	
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
	$conn->query($sql);
	while($row = $conn->fetchArray()){
		
		SendMail($row[1],$row[0],$conn1,$conn2,1);
		
		$sql2 = "update reservation 
				set reserv_sendmail_alert = 1
				where reserv_id = '".$row[0]."'";
		$conn2->query($sql2);
	}
?>