<?php ob_start(); ?>
<?php require_once('../include/connect.inc.php'); ?>
<?php require_once('../include/function.inc.php'); ?>
<?php require_once('../include/chkauth_admin.inc.php'); ?>
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
    	<h1 align="center" style="margin-top:100px">[[ www.AndamanTaxis.com ]]</h1>
		<!-- TemplateBeginEditable name="content" -->content<!-- TemplateEndEditable -->
    </div>
</body>
</html>
<?php ob_end_flush(); ?>