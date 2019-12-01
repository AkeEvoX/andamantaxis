<?php 
date_default_timezone_set('Asia/Bangkok');
require_once('../include/class.phpmailer.php');
require_once '../vendor/autoload.php';
ini_set('display_errors', 1);
//error_reporting(0);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ERROR | E_CORE_ERROR ) ;
//ini_set('error_reporting', 'E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR');
//ini_set('error_reporting', E_ALL & ~E_STRICT & ~E_DEPRECATED);
error_reporting(E_ERROR | E_PARSE );
/*E_PARSE | E_WARNING | E_NOTICE , E_ALL | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR*/


/*define variable globle for client;*/
$base_dir = "../";

function replace_specialtext($message){
	
	$result = str_replace("'","\'",$message);
	
	return $result;
}

function GetParameter($id){
	
	$result = "";
	if(isset($_POST)){
		if(isset($_POST[$id]))
		{
			$result =$_POST[$id];
		}
	}
	
	if(isset($_GET)){
		if(isset($_GET[$id]))
		{
			$result =$_GET[$id];
		}
	}
	return $result;
}

function upload_image($source,$distination){
	
	if($source=="") return;
	
	if(file_exists($distination)){
		log_debug('exists file upload > '.$distination);
		return ;
	}
	
	if(move_uploaded_file($source,$distination))
	{
		chmod($distination, 0775);
		log_debug('upload image success. > '.$distination);
	}
	else{
		log_debug('upload image Failed. >'.$distination);
	}
}

function full_date_format($date,$lang){


	switch($lang){
	case "en":

		$month = date("m",strtotime($date));
		$day =  date("d",strtotime($date));
		$year = date("Y",strtotime($date));
		$month_str = array("01"=>"January","02"=>"Faburary","03"=>"March","04"=>"May","05"=>"June","06"=>"June","07"=>"July","08"=>"August","09"=>"Sebtember","10"=>"Octuber","11"=>"November","12"=>"December");
		$month = $month_str[$month];
		$result = $day." ".$month." ".$year;

	break;
	case "th":
		$month = date("m",strtotime($date));
		$day =  date("d",strtotime($date));
		$year = date("Y",strtotime($date)) + 543;
		$time = date('h:i:s',strtotime($date));
		$month_str = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน","05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
		$month = $month_str[$month];
		$result = $day." ".$month." ".$year . " " .$time;
	break;
	}

	return $result;

}

function datediff($startdate,$enddate){
	return (strtotime($enddate) - strtotime($startdate))/  ( 60 * 60 * 24 );
}

function createdir($directory)
{
		/*
		$parts = explode('/', $directory);
        $file = array_pop($parts);
        $dir = '';
		
        foreach($parts as $part)
		{
			/*
			if($part=="..")
				$dir="..";
			else
				$dir .= "/$part";
		
			$checkDir = $dir;
			if(!is_dir($checkDir)) 
			{
				mkdir($checkDir,0777,true);
			}
			mkdir($checkDir,0777,true);
		}*/
		
		if(!is_dir($directory))  //validate found directory
			mkdir($directory,0777,true);
}

function send_mail($sender,$subject,$message,$attachment){
	
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

		if(!$mail->Send()) 
			echo "Mailer Error: " . $mail->ErrorInfo;
	
}

// used for generate pdf file and attachment mail 
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
// used for generate email template
function generate_template_mail($items,$type_mail){
	
	$departureInfo = "";
	
	switch($type_mail){
		case "cash":
			$template_mail = file_get_contents('../templates/mail/templete-interbank.php');
			if($items->transferType=="2") //type 2 is transport round trip.
				$departureInfo = getDepartureInfo($items);
		break;
		case "paypal":
			$template_mail = file_get_contents('../templates/mail/templete-payment.php');
			if($items->transferType=="2") //type 2 is transport round trip.
				$departureInfo = getDepartureInfo($items);
		break;
		case "reminder":
			$template_mail = file_get_contents('../templates/mail/templete-reminder.php');
			if($items->transferType=="2") //type 2 is transport round trip.
				$departureInfo = getDepartureInfoReminder($items);
		break;
		case "review":
			$template_mail = file_get_contents('../templates/mail/templete-review.php');
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

// used for email template round trip
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
// used for email template round trip
function getDepartureInfoReminder($items){
	$departure = "<p >
2) On Date : ". $items->dropofftime ."<br/>
Pick-up from : <b>".$items->to."</b> to <b>".$items->from."</b> <br/>
</p>
	";
	
	return $departure;
}

?>
