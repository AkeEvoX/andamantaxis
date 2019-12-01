<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>update-insert</title>      
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
 
    <link rel="stylesheet" href="/css/ch/bootstrap.css">
    <link rel="stylesheet" href="/css/ch/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="/css/ch/animate.css">
    <link rel="stylesheet" href="/css/ch/templatemo-misc.css">
    <link rel="stylesheet" href="/css/ch/templatemo-style.css">
    <link rel="stylesheet" href="/css/css1.css">
        <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
   
    <!-- Animate CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen">
         
    
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/dot-luv/jquery-ui.min.css"/>
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<?php 
include("Connect.php"); 
?> 
<?
if($_POST['hidAction'] == "Add") { 
$date = date("U"); 
if($_FILES['file'] != "") {
 $type = getimagesize($_FILES['file']["tmp_name"]);
 if($type[2] == 1) {  
 $image = $date."_img.gif";
 } else if($type[2] == 2) { 
 $image = $date."_img.jpg";
 }
 copy($_FILES['file']["tmp_name"], "/images/photos/$image");
 chmod("/images/photos/$image", 0664); 
 }
	
	$host="localhost";
	$db_username="andaman4_package";
	$db_password="pVim53Y3f4";
	$dbname="andaman4_package";
	$connect = mysql_connect($host,$db_username,$db_password);

	if(!$connect){

		echo "sss"; exit();

	}
$id = $_POST['id'];
$img1_name = $_POST['img1_name'];
$img1_title = $_POST['img1_title'];
$sql = "UPDATE img_package SET img1_name = '$img1_name', img1_title='$img1_title' WHERE id = '$id' "  ;

	$dbquery = mysql_db_query($dbname, $sql);
		
}
echo "<div class=\"alert alert-success\">
  <strong>Success!</strong>
</div>";
?>
<?php 
include("footer.php"); 
?>
</div>
</div>
</div>
</body>
</html>