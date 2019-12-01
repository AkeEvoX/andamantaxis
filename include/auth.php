<?php
	if ($_SESSION[login_id] == "" &&
		$_COOKIE[login_id] == ""){
		
		exit("<script>
				window.location='login.php';
			  </script>");
	}
	
/*	if ($_SESSION["login_level"] >= 90 ||
		$_COOKIE["login_level"] >= 90){
		exit("<script>
			window.location='cms/login/';
		  </script>");
	}
*/	
?>