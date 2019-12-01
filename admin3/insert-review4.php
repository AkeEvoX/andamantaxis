<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>update-insert-thai</title>      
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
<?php
// Connect to server and select database.
mysql_connect("localhost", "andaman4_package", "pVim53Y3f4")or die("cannot connect"); 
mysql_select_db("andaman4_package")or die("cannot select DB");

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$country = $_POST['country'];
$FromTo = $_POST['FromTo'];
echo "$id";
echo "$name";
// update data in mysql database 
mysql_query("SET NAMES UTF8");
$sql="UPDATE Review SET name='$name', title='$title', content='$content', country='$country', FromTo='$FromTo' WHERE id='$id'";
$result=mysql_query($sql)or 
die ("NO ERROR");
// if successfully updated. 
if($result){
echo "<div class=\"alert alert-success\">
  <strong>Success!</strong>
</div>";
echo "<BR>";
echo "<meta http-equiv='refresh' content='1; url=INSERT-UPDATE4.php?id=$id'>" ;
}
else {
echo "NO ERROR";
}
?>
</body>
</html>