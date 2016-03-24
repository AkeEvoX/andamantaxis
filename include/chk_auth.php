<?php
	if ($_SESSION["login_id"] != "" ||
		$_COOKIE["login_id"] != ""){
		
		exit("<script>
				window.location='index.php';
			  </script>");
	}

?>