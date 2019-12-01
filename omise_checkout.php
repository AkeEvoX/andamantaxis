<?php
	require_once("/omise-php/lib/Omise.php");
	define("OMISE_API_VERSION","2019-05-29");
	define("OMISE_PUBLIC_KEY","pkey_test_5ht64xcxv6dcsjtis48");
	define("OMISE_SECRET_KEY","skey_test_5ht64xcxvqy2yfxv6nd");
	
	$amt=$_POST["inputAmount"];
	$cur = "thb";
	$token=$_POST["omise_token"];
	$orderid=$_POST["inputOrderID"];
	$remoteAddr = $_SERVER['REMOTE_ADDR'] ;

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
		echo "<script>alert('Error!!, ".$ex->getMessage().".');";
		echo "window.history.back(); ";
		echo "</script>";
		exit();
	}
	
	if($result["status"]=="successful"){
		
		/* redirect to omise success page */
		header("location:confirm_omise.php?id=".$orderid."&_=".gettimeofday()['usec']);
		exit;
	}
	else{
		/* redirect to previous page */
		echo "<script>alert('Error!!, we found someting wrong please submit again.');";
		echo "window.history.back(); </script>";
		exit;
	}
	
	
	
	
?>