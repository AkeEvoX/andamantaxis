<?php ob_start(); ?>
<?php require_once('../../include/connect.inc.php'); ?>
<?php require_once('../../include/function.inc.php'); ?>
<?php require_once('../../include/chkauth_admin.inc.php'); ?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/backend_login.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>BackEnd</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../../js/jquery.min.js"></script>
<script src="../../jquery/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<link rel="stylesheet" type="text/css" href="../../plugin/jquery-ui/jquery-ui.min.css">
<script src="../../plugin/jquery-ui/external/function.js"></script>
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
$(document).ready(function(e) {

    $("#submitBtn").click(function(){
		
		$("#error").html("");
		
		if (!checkEmpty("#email","#emailError","Enter email"))
			return false;
		if (!checkEmail("#email","#emailError","Invalid email format"))
			return false;
		if (!checkEmpty("#password","#passwordError","Enter password"))
			return false;

		$("#form1").submit();
		return false;
	});
	
	$("#form1").bind("keypress", function(e) {
	 var code = e.keyCode || e.which;
 		if(code == 13){
			$("#submitBtn").click();
			return false;
		}
	});

});
</script>
<!-- InstanceEndEditable -->
</head>
<body>
    <div class="container">
    	<h1 align="center" style="margin-top:100px">[[ www.AndamanTaxis.com ]]</h1>
		<!-- InstanceBeginEditable name="content" -->
        <?php
			if ($_POST){
				$email = trim($_POST["email"]);
				$password = trim($_POST["password"]);
				$error = "";
				
				$sql = "select * from staff 
						where staff_email = '$email'";
				$result = $conn->query($sql) or exit($conn->error);
				$row = $result->fetch_array();
				
				if ($row["staff_email"]=="")
					$error = "This email doesn't found in system";
				elseif ($row["staff_password"]!=$password)
					$error = "This password is incorrect";
				elseif ($row["staff_status"]!=1)
					$error = "This staff is disabled";
				else{

					setcookie("login_email",$row["staff_email"],0,"/");
					setcookie("login_name",$row["staff_firstname"],0,"/");
					setcookie("login_surname",$row["staff_lastname"],0,"/");
					setcookie("login_level",$row["staff_level"],0,"/");
					setcookie("login_id",$row["staff_id"],0,"/");

					exit("<script>window.location='index.php';</script>");
				}
			}
		?>
        <form name="form1" id="form1" method="post" action="">
        <div id="logInBox">
            <h1>Login</h1>
            <p>Email</p>
            <input type="text" name="email" id="email" value="<?php echo $email ?>" required>
             <span class="error" id="emailError"></span>
            <p>Password</p>
            <input type="password" name="password" id="password" required>
             <span class="error" id="passwordError"></span>
            <div id="submitBtn">SUBMIT</div>
            <span class="error" id="error"><?php echo $error; ?></span>
        </div>        
       	</form>
        <!-- InstanceEndEditable -->
    </div>
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush(); ?>