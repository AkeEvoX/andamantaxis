<?php
	// check status for admin 
	if ($_SESSION["login_id"] == "" &&
		$_COOKIE["login_id"] == ""){
		
		exit("<script>
				window.location='../../login.php';
			  </script>");
	}
?>