<?
session_start();
$booking = unserialize(base64_decode($databooking));

/*
[0][province_src] => 4
[1][location_src] => 27
[2][province_dist] => 2
[3][location_dist] => 16
[4][arrival_date] => 27-03-2016
[5][arrival_hour] => 9
[6][arrival_minute] => 15
[7][departure_date] => 27-03-2016
[8][departure_hour] => 8
[9][departure_minute] => 0
[10][adults] => 2
[11][children] => 0
[12][infants] => 0
[13][transfer] => 1
[14][vehicle_type] => 2
[16][price] => 600.00
[17][price_agent] => 542.00
[18][unit] => 1
*/

$booking["unit"] = $_POST["unit"];
/*create session booking*/
$num_route = $_GET["num_route"];
if(isset($_SESSION["s_route"]) && $num_route=="")
{
	$num_route=count($_SESSION["s_route"]);
}

$_SESSION["s_route"][$num_route] =$booking;

/*
array($booking["province_src"],$booking["location_src"],$booking["province_dist"],$booking["location_dist"]
,$booking["arrival_date"],$booking["arrival_hour"],$booking["arrival_minute"],$booking["departure_date"],$booking["departure_hour"]
,$booking["departure_minute"],$booking["adults"],$booking["children"],$booking["infants"],$booking["transfer"],$_POST["unit"]);
*/

?>

<script>

alert('Booking Success.');
window.location.href='booking-transfer.php';
</script>