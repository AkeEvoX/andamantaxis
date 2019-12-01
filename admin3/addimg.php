<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>ADD PICTURE</title>      
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
    <script>
    function validateForm() {
    var x = document.forms["form1"]["img1_title"].value;
    if (x == "") {
        alert("Please Add content");
        return false;
    }
	var x = document.forms["form1"]["file"].value;
    if (x == "") {
        alert("Please Select Picture (Gif/Jpg)");
        return false;
    }
}
</script>
</head>
<body>
<div class="container">
          <div class="row">
              <div class="col-md-12 section-title">
<?php 
include("head.php"); 
?>
<?php 
include("Connect.php"); 
?> 
<?php

mysql_connect("localhost", "andaman4_package", "pVim53Y3f4")or die("cannot connect"); 
mysql_select_db("andaman4_package")or die("cannot select DB");
// get value of id that sent from address bar
$id=$_GET['id'];
// Retrieve data from database 
mysql_query("SET NAMES UTF8");
$sql="SELECT * FROM package WHERE id = '$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<p><?php echo $rows['name']; ?></p>
<p><?php echo $rows['name_th']; ?></p>
<br>
<form action="form_pic1.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm()">
 <input type="file" name="file" />
<input name="id" type="hidden" value="<?php echo $rows['id']; ?>" maxlength="4">
<input name="img1_title" type="text" size="50" maxlength="100" placeholder="insert content">
<br>
 <p>Type Picture :
  <select id="p_picture" name="p_picture">                         
    <option value="1">Product Picture</option>
    <option value="2">Page Picture (only 1 picture)</option>
  </select>
   <p>Online now :
  <select id="p_active" name="p_active">                      
    
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>   
   <p><br>
     <input type="submit" name="Submit" value="addpic" />
     <br>
  <input name="hidAction" id="hidAction" type="hidden" value="Add">
   </form>
 <br>
 <strong>Can't use PNG image </strong></div>
 </div>
 </div>
 <?php 
include("footer.php"); 
?>
 </body>
</html>


