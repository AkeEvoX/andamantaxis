<?php
	//require_once("/lib/omise.php");
	require_once("/omise-php/lib/Omise.php");
	//var_dump($_POST);
	define("OMISE_API_VERSION","2019-05-29");
	define("OMISE_PUBLIC_KEY","pkey_test_5ht64xcxv6dcsjtis48");
	define("OMISE_SECRET_KEY","skey_test_5ht64xcxvqy2yfxv6nd");
	
	//$omise = new omise_manager();
	$amt=$_POST["price"];
	$cur = "thb";
	$token=$_POST["omise_token"];
	$orderid=$_POST["orderid"];
	$remoteAddr = $_SERVER['REMOTE_ADDR'] ;
	echo "<p>amount=".$amt."</p>";
	echo "<p>orderid=".$orderid."</p>";
	//echo "card=".$token;
	//$result = $omise->Charge($amt,$cur,$token);
	try{
	$result = OmiseCharge::create(array(
			"amount" => $amt."00",
			"currency" => $cur,
			"description" => "Charge for order " . $orderid,
			"ip" => $remoteAddr, 
			"card"=>$token
		));
	}
	catch(OmiseException $ex){
		echo "<p>Error code : ".$ex->getCode()."</p>";
		echo "<p>Message :". $ex->getMessage()."</p>";
		echo "<input type='button' onclick='window.history.back();' value='click back'/>";
		exit();
	}
	
	if($result["status"]=="successful"){
		
		/* redirect to omise success page */
		
		header("location:confirm_omise.php?id=".$orderid."&_=1w8du19162931923=");
		exit;
	}
	else{
		/* redirect to previous page */
		echo "<script>alert('Error!!, we found someting wrong please submit again.');";
		echo "window.history.back(); </script>";
		exit;
	}
	
	
	
	
?>