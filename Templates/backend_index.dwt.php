<?php ob_start(); ?>
<?php require_once('../include/connect.inc.php'); ?>
<?php require_once('../include/function.inc.php'); ?>
<?php require_once('../include/auth_admin.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>BackEnd</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" type="text/css" href="../backend/css/style.css">
<script src="../plugin/jquery-ui/external/jquery/jquery.min.js"></script>
<script src="../plugin/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../plugin/jquery-ui/jquery-ui.min.css">
<script src="../plugin/jquery-ui/external/function.js"></script>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
	<div class="container">
        <div id="navigation">
            <div id="userInfo">
                <span>Welcome: </span><span><?php echo $name." [".ShowLevel($level)."]"; ?> </span><a href="<?php echo $path ?>backend/login/logout.php">Logout</a>
            </div>
            <div id="menuBar">
                <span>Menu: </span>
                    <a href="../backend/reservation">Reservation</a> | 
                    <a href="../backend/route">Route</a> | 
                    <a href="../backend/agent">Agent</a> | 
                    <a href="../backend/staff">Staff</a><!-- | 
                    <a href="">Control System</a>-->
            </div>
            <hr>
        </div>
        <!-- TemplateBeginEditable name="content" -->content<!-- TemplateEndEditable -->
        <div>
        </div>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>