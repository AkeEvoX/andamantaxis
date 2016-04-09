<? 

require_once("include/class.phpmailer.php");

$mail = new PHPMailer();

$mail->SetLanguage('en','include/language/');
$mail->IsSMTP();

//$body = "ทดสอบการส่งอีเมล์ภาษาไทย UTF-8 ผ่าน SMTP Server ด้วย PHPMailer.";
$body = "hello";

$mail->CharSet = "utf-8";
//$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->Port = 587; // พอร์ท  465 or 587
$mail->IsHTML(true);
$mail->Username = "svargalok@gmail.com"; // account SMTP
$mail->Password = "trinity@59"; // รหัสผ่าน SMTP
$mail->SetFrom("svargalok@gmail.com", "svargalok");
$mail->AddReplyTo("svargalok@gmail.com", "Administrator");

/*
$mail->Host="smtp.andamantaxis.com";
//$mail->Port=587;
//$mail->SMTPSecure = 'tls';
$mail->IsHTML(true);
$mail->Username = "mail@andamantaxis.com"; // account SMTP
$mail->Password = "andamantaxis@2016"; // รหัสผ่าน SMTP
$mail->SetFrom("mail@andamantaxis.com", "svargalok");
$mail->AddReplyTo("mail@andamantaxis.com", "Administrator");
*/

$mail->Subject = "ทดสอบ PHPMailer.";

//$mail->MsgHTML($body);
//$mail->Body = "=?utf-8?b?".base64_encode($body)."?=";

$mail->MsgHTML( "=?utf-8?b?".base64_encode($body)."?=");

$mail->AddAddress("neosvargalok@hotmail.com"); // ผู้รับคนที่หนึ่ง
//$mail->AddAddress("recipient2@somedomain.com", "recipient2"); // ผู้รับคนที่สอง

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}



/* basic send mail
$to = "svargalok@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$resultmail = @mail($to,$subject,$txt,$headers);

if($resultmail)
{
echo "Send mail success.";	
}
else
{
	echo "Send mail faillure.";
}
*/




?>