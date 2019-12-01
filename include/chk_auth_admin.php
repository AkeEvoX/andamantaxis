<?php	
  if ($_SESSION["login_email"] != "" ||
		$_COOKIE["login_email"] != ""){
			
	if ($_SESSION["login_level"] >= 90 ||
		$_COOKIE["login_level"] >= 90){
		
		exit("<script>
				window.location='../login/index.php';
			  </script>");
	}
  }
?>
<?php require_once("send_var.php"); ?>