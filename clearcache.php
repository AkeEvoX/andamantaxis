<?
require_once("include/connect.php");
require_once("include/function.php");
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


/* test send mail */
/*$mail = "werawat.l@icloud.com";
$reserveid = 60;
$reminder = 0;
SendMail($mail,$reserveid,$conn,$conn2,$reminder);
*/

$to = "svargalok@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);


// Finally, destroy the session.
session_destroy();



?>

<a href="index.php">Go Home</a>