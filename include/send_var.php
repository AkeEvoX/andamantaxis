<?php
	if ($_SESSION["login_id"]!=""){
		$name  = $_SESSION["login_name"];
		$id  = $_SESSION["login_id"];
	}elseif ($_COOKIE["login_id"]!=""){
		$name  = $_COOKIE["login_name"];
		$id  = $_COOKIE["login_id"];
	}	
	
	if ($_SESSION["login_level"]!=""){
		$level 	   = $_SESSION["login_level"];
		$levelname = $_SESSION["login_levelname"];
	}elseif ($_COOKIE["login_level"]!=""){
		$level     = $_COOKIE["login_level"];
		$levelname = $_COOKIE["login_levelname"];
	}
?>