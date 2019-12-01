<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>Update Package</title>      
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
include("head.php"); 
?> 
<div class="container">
          <div class="row">
              <div class="col-md-12 section-title">
<?php 
include("Connect.php"); 
?> 
<?php

mysql_connect("localhost", "andaman4_package", "pVim53Y3f4")or die("cannot connect"); 
mysql_select_db("andaman4_package")or die("cannot select DB");
// get value of id that sent from address bar
$id=$_GET['id'];
echo "$id";
// Retrieve data from database 
mysql_query("SET NAMES UTF8");
$sql="SELECT * FROM package WHERE id = '$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>


<script language="javascript">
function fncSubmit()
{
	if(confirm('Confirm to submit')==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
<form method="POST" onSubmit="JavaScript:return fncSubmit();" action="insert2.php">
ID <input name="id" type="hidden" value="<?php echo $rows['id']; ?>" size="1" maxlength="1">
  <p>Add Package</p>
  <p>CODE :
    <input name="code" type="text" value="<?php echo $rows['code']; ?>" size="6" maxlength="6">
  </p>
  <p><br>
    Name : <input name="name" type="text" value="<?php echo $rows['name']; ?>" size="150" maxlength="255">
    <br>
    <br>
    EN URL : <input name="url" type="text" value="<?php echo $rows['url']; ?>" size="150" maxlength="255">
    <br>
    <br>
    Province :
    <select id="province_id" name="province_id">  
     <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("NO");
  mysql_select_db($dbname) or die("ddd");
mysql_db_query($dbname,"SET NAMES UTF8");
  $sql = "select * from province,package where province.province_id = package.province_id and   package.id=".$_GET['id']; 
  $result=mysql_query($sql);
  if(!$result){
   echo mysql_error($conn);
  }
while ($arrlist= mysql_fetch_array($result))  {
$province_id = $arrlist[province_id];
$province_name = $arrlist[province_name];
		 echo"<option value=\"$province_id\">$province_name</option>";
}
mysql_close();
 ?>                    
      <option value="1">Krabi</option>
      <option value="2">Phuket</option>
    </select>

    Package Type :
    <select id="type" name="type">  
         <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("NO");
  mysql_select_db($dbname) or die("ddd");
mysql_db_query($dbname,"SET NAMES UTF8");
  $sql = "select * from type_package,package where type_package.type = package.type and   package.id=".$_GET['id']; 
  $result=mysql_query($sql);
  if(!$result){
   echo mysql_error($conn);
  }
while ($arrlist= mysql_fetch_array($result))  {
$type = $arrlist[type];
$type_name = $arrlist[type_name];
		 echo"<option value=\"$type\">$type_name</option>";
}
mysql_close();
 ?>                      

      <option value="1">1 Day Tour</option>
      <option value="2">2 Days 1 Night</option>
      <option value="3">3 Days 2 Night</option>
    </select>
  </p>
  <p><br>
    
    <strong><font color="#00CC99" size="+2">Short Detail</font></strong><br>
    <textarea name="s_detail" cols="150" rows="5"><?php echo $rows['s_detail']; ?></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">Full Detail</font></strong><br>
    <textarea name="detail" cols="150" rows="5"><?php echo $rows['detail']; ?></textarea>
    <br> 
    <strong><font color="#00CC99" size="+2">Itinery</font></strong><br>
    <textarea name="itineray" cols="150" rows="5"><?php echo $rows['itineray']; ?></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">Price</font></strong><br>
    <input name="price" type="text" value="<?php echo $rows['price']; ?>" size="150" maxlength="255"><br>
    <br>   
    <strong><font color="#00CC99" size="+2">Include</font></strong><br>
    <textarea name="include" cols="150" rows="5"><?php echo $rows['include']; ?></textarea>
    <br>
      <br>   
    <strong><font color="#00CC99" size="+2">Exclude</font></strong><br>
    <textarea name="exclude" cols="150" rows="5"><?php echo $rows['exclude']; ?></textarea>
    <br>   
      <br>   
    <strong><font color="#00CC99" size="+2">Remark</font></strong><br>
    <textarea name="remark" cols="150" rows="5"><?php echo $rows['remark']; ?></textarea>
    <br> 
      <br>   
    <strong><font color="#00CC99" size="+2">What to bring</font></strong><br>
    <textarea name="whattobring" cols="150" rows="5"><?php echo $rows['whattobring']; ?></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">Latitude</font></strong><br>
    <input name="latitude" type="text" value="<?php echo $rows['latitude']; ?>" size="150" maxlength="255"><br>
    <br>
    <strong><font color="#00CC99" size="+2">Longitude</font></strong><br>
    <input name="longitude" type="text" value="<?php echo $rows['longitude']; ?>" size="150" maxlength="255">
     <br>
  </p>
  <p>Online now : 1 Yes 2 No
  <select id="active" name="active">                      
    <option value="<?php echo $rows['active']; ?>"><?php echo $rows['active']; ?></option>
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>
  </p>
  <p><br />
   <input type="submit" name="Submit" value="Submit" /></td>
  </p>
</form>
<?php 
include("footer.php"); 
?>
</body>
</html>
