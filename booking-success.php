<?
session_start();
$booking = unserialize(base64_decode($databooking));

/*
 [province_src] => 3 [location_src] => 26 [province_dist] => 3
 [location_dist] => 26 [arrival_date] => 25-03-2016 [arrival_hour] => 8 [arrival_minute] => 0 
 [departure_date] => 25-03-2016 [departure_hour] => 8 [departure_minute] => 0 
 [adults] => 2 [children] => 0 [infants] => 0 [transfer] => 
*/

/*create session booking*/
$num_route = 0;
if(isset($_SESSION["s_route"]))
{
	$num_route=count($_SESSION["s_route"]);
}

$_SESSION["s_route"][$num_route] = array($booking["province_src"],$booking["location_src"],$booking["province_dist"],$booking["location_dist"]
,$booking["arrival_date"],$booking["arrival_hour"],$booking["arrival_minute"],$booking["departure_date"],$booking["departure_hour"]
,$booking["departure_minute"],$booking["adults"],$booking["children"],$booking["infants"],$booking["transfer"]);

?>

<script>

alert('Booking Success.');
window.location.href='booking-transfer.php';
</script>