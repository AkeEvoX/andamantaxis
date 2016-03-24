<?php
	// check status for admin 
	if ($_SESSION["login_id"] == "" &&
		$_COOKIE["login_id"] == ""){
		
		exit("<script>
				window.location='../../login.php';
			  </script>");
	}

	if ($_SESSION["login_level"] < 90 &&
		$_COOKIE["login_level"] < 90){
		
		exit("<script>
				alert('This Section for admin only');
				window.location='../../login.php';
			  </script>");
	}
?>