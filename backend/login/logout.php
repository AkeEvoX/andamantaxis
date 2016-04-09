<?php ob_start(); ?>
<?php require_once('../../include/connect.inc.php'); ?>
<?php require_once('../../include/function.inc.php'); ?>
<?php require_once('../../include/auth_admin.inc.php'); ?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/backend_index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>BackEnd</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../../plugin/jquery-ui/external/jquery/jquery.min.js"></script>
<script src="../../plugin/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../plugin/jquery-ui/jquery-ui.min.css">
<script src="../../plugin/jquery-ui/external/function.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
	<div class="container">
        <div id="navigation">
            <div id="userInfo">
                <span>Welcome: </span><span><?php echo $name." [".ShowLevel($level)."]"; ?> </span><a href="<?php echo $path ?>backend/login/logout.php">Logout</a>
            </div>
            <div id="menuBar">
                <span>Menu: </span>
                    <a href="../reservation">Reservation</a> | 
                    <a href="../route">Route</a> | 
                    <a href="../agent">Agent</a> | 
                    <a href="../staff">Staff</a><!-- | 
                    <a href="">Control System</a>-->
            </div>
            <hr>
        </div>
        <!-- InstanceBeginEditable name="content" -->
		<?php
			setcookie("login_email","",time()-1,"/");
			setcookie("login_name","",time()-1,"/");
			setcookie("login_surname","",time()-1,"/");
			setcookie("login_level","",time()-1,"/");
			setcookie("login_id","",time()-1,"/");
			
			exit("<script>window.location='login.php';</script>");
		?>            
		<!-- InstanceEndEditable -->
        <div>
        </div>
    </div>
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush(); ?>