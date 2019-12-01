<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>insert</title>      
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
$con = mysql_connect("localhost","andaman4_package","pVim53Y3f4");
if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
mysql_select_db("andaman4_package", $con);
mysql_query("SET NAMES UTF8"); 
$date = date("yyyy/mm/dd");

$sql="INSERT INTO `Review` (`name`, `title`, `content`, `date`, `country`, `FromTo`)

VALUES
('$_POST[name]', '$_POST[title]', '$_POST[content]', '$_POST[date]', '$_POST[country]', '$_POST[FromTo]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());

  }
echo "<div class=\"alert alert-success\">
$name
  <strong>Success! Thank you</strong>
</div>";

echo "<a href=\"https://andamantaxis.com/\"><img src=\"/images/logo.jpg\" alt=\"Andamantaxis\" title=\"Andamantaxis\"></a>";
mysql_close($con)

?>
</body>
</html>
