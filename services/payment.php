<?php
require_once('../managers/payments.php');
require_once('../lib/common.php');
session_start();

$service_type = $_GET["action"];

switch($service_type){
	case "GetTypes":
	
		$manager = new PaymentManager();
		$result = $manager->PaymentTypes();
		echo json_encode($result);
	
	break;
	case "GetPaymentPrice":
		
		/* retrive data from session object route */
		$item =$_SESSION["s_route"][0];
		
		/*checking booking by agent */
		if($_SESSION["s_mem_id"]!="")
			$total = $item["price_agent"] * $item["unit"];
		else
			$total = $item["price"] * $item["unit"];
	
		$result = array("total"=>$total,"message"=>"Get payment price is complete.");
	
		echo json_encode($result);
	break;
	default:
		echo "E404 : Service not found.";
		exit();
	break;
}
?>