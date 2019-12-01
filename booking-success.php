<?
session_start();
$booking = unserialize(base64_decode($_POST["databooking"]));


$booking["unit"] = $_POST["unit"];
$booking["vehicle_search"] = $_POST["vtype=id"];
/*create session booking*/
$num_route = $_GET["num_route"];

if($num_route == ""){
	//if(isset($_SESSION["s_route"]))
	//{
		//echo "get new route <br />";
		$num_route=count($_SESSION["s_route"]);
	//}
}

$_SESSION["s_route"][$num_route] =$booking;

?>

<script>

//alert('Booking Success.');
window.location.href='booking-transfer.php';
</script>