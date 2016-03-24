<?php
  if ($_SESSION["login_email"] != "" ||
		$_COOKIE["login_email"] != ""){
			
		exit("<script>
				window.location='../login';
			  </script>");
  }
?>
