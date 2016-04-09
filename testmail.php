<? 

require_once("include/class.phpmailer.php");
date_default_timezone_set('America/Los_Angeles');

$mail = new PHPMailer();

$mail->IsSMTP();


$templete = file_get_contents('include/templete-payment.php');

$templete = str_replace('#bookid','#000051',$templete);
$templete = str_replace('#passenger','Siritana jaiprachot',$templete);
$templete = str_replace('#cash','4,444.44',$templete);
$templete = str_replace('#from','Ao Nang',$templete);
$templete = str_replace('#to','Karon',$templete);
$templete = str_replace('#vehicle','Car [Unit:2]',$templete);
$templete = str_replace('#pickuptime','07 Mar 2016 12:00 - 07 Mar 2016 12:00',$templete);

$body = $templete;

$mail->Subject = "Payment Complete booking id #00052.";
$mail->MsgHTML($body);

$mail->CharSet = "utf-8";
$mail->Host="smtp.andamantaxis.com";
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->Username = "mail@andamantaxis.com"; 
$mail->Password = "andamantaxis@2016"; 
$mail->SetFrom("mail@andamantaxis.com", "Andamantaxis");
$mail->AddBcc("Andamantaxis@gmail.com", "notify admin");
$mail->AddReplyTo("mail@andamantaxis.com", "admin");

$mail->AddAddress("werawat.l@icloud.com"); 

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
//*/

?>