<?php
	// check status for admin 
	if ($_SESSION["login_email"] == "" &&
		$_COOKIE["login_email"] == ""){
		
		exit("<script>
				window.location='../login/login.php';
			  </script>");
	}

	if ($_SESSION["login_level"] != "" &&
		$_COOKIE["login_level"] != ""){
		
		exit("<script>
				alert('This Section for admin only');
				window.location='../login/login.php';
			  </script>");
	}	
?>
<?php require_once("send_var.php"); ?>