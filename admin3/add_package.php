<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>Add Package</title>      
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
    var x = document.forms["form1"]["name_th"].value;
    if (x == "") {
        alert("Please insert name THAI");
        return false;
    }
	var x = document.forms["form1"]["detail_th"].value;
    if (x == "") {
        alert("Please insert detail THAI");
        return false;
    }
}
</script>
        <script>
    function validateForm2() {
    var x = document.forms["form2"]["name"].value;
    if (x == "") {
        alert("Please insert name");
        return false;
    }

}
</script>
<style>
/*Panel tabs*/
.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #ffffff;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #ffffff;
    background-color: transparent;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}

</style>
</head>
<body>
<?php 
include("head.php"); 
?> 
<br>


<div class="container">
<div class="page-header">
       
    </div>
          <div class="row">
              <div class="col-md-12 section-title">
<?php 
include("Connect.php"); 
?> 



            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab"><img src="/images/th.png" border="0"> ภาษาไทย</a></li>
                            <li><a href="#tab2default" data-toggle="tab"><img src="/images/en.png" border="0"> English</a></li>
                           
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">  <h3><img src="/images/th.png"> ภาษาไทย</h3>
                        <form method="POST" name="form1"  action="insert3.php" onSubmit="return validateForm()">

  <p>CODE :
    <input name="code" type="text" size="6" maxlength="6">
  <p> <p><br>
    โปรเเกรมทัวร์ชื่อ : <input name="name_th" type="text" size="150" maxlength="255">
    <br>
    <br>
    โปรเเกรมทัวร์ชื่อภาษาอังกฤษ : <input name="url" type="text" size="150" maxlength="255">
    <br>
    <br>
    จังหวัด :
    <select id="province_id" name="province_id">                      
      <option value="0">--จังหวัด--</option>
  <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("NO");
  mysql_select_db($dbname) or die("ddd");
mysql_db_query($dbname,"SET NAMES UTF8");
  $sql = "select * from province"; 
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
    </select>
    รูปแบบกิจกรรมท่องเที่ยว :
    <select id="type" name="type">                      
      <option value="0">--รูปแบบกิจกรรมท่องเที่ยว --</option>
         <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("NO");
  mysql_select_db($dbname) or die("ddd");
mysql_db_query($dbname,"SET NAMES UTF8");
  $sql = "select * from type_package"; 
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
    </select>
  </p>
  <p><br>
    
    <strong><font color="#00CC99" size="+2">เนื้อหาสั้นๆ</font></strong><br>
    <textarea name="s_detail_th" cols="150" rows="5"></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">เนื้อหาเเบบยาว</font></strong><br>
    <textarea name="detail_th" cols="150" rows="5"></textarea>
    <br> 
    <strong><font color="#00CC99" size="+2">รายละเอียดการเดินทาง</font></strong><br>
    <textarea name="itin" cols="150" rows="5"></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">ราคา</font></strong><br>
    <input name="price" type="text" size="150" maxlength="255"><br>
    <br>   
    <strong><font color="#00CC99" size="+2">ราคารวม</font></strong><br>
    <textarea name="include_th" cols="150" rows="5"></textarea>
    <br>
      <br>   
    <strong><font color="#00CC99" size="+2">ราคาไม่รวม</font></strong><br>
    <textarea name="exclude_th" cols="150" rows="5"></textarea>
    <br>   
      <br>   
    <strong><font color="#00CC99" size="+2">ข้อควรทราบ</font></strong><br>
    <textarea name="remark_th" cols="150" rows="5"></textarea>
    <br> 
      <br>   
    <strong><font color="#00CC99" size="+2">ลูกค้าต้องเตรียมอะไรไปบ้าง</font></strong><br>
    <textarea name="whattobring_th" cols="150" rows="5"></textarea></p>
                        
           <br>
    <strong><font color="#00CC99" size="+2">Latitude</font></strong><br>
    <input name="latitude" type="text" size="150" maxlength="255"><br>
    <br>
    <strong><font color="#00CC99" size="+2">Longitude</font></strong><br>
    <input name="longitude" type="text" size="150" maxlength="255">
     <br>
  </p>
  <p>Online now :
  <select id="active" name="active">                      
    
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>
  </p>
  <p><br />
    <input type="submit" name="send" value="ADD">
  </p>
</form>                 
            </div>
                        

 <div class="tab-pane fade" id="tab2default"> <h3><img src="/images/en.png"> English</h3>
  <form method="POST" name="form2"  action="insert.php" onSubmit="return validateForm2()">

  <p>CODE :
    <input name="code" type="text" size="6" maxlength="6" disabled="disabled">
  <p> <p><br>

    Tour Name<input name="name" type="text" size="150" maxlength="255">
    <br>
<br>
    URL<input name="url" type="text" size="150" maxlength="255" disabled="disabled">
    <br>
<br>
    Select Province :
    <select id="province_id" name="province_id">                      
      <option value="0">--Select Province--</option>
  <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("NO");
  mysql_select_db($dbname) or die("ddd");
mysql_db_query($dbname,"SET NAMES UTF8");
  $sql = "select * from province"; 
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
    </select>
   Select Type
    <select id="type" name="type">                      
      <option value="0">--Select Type--</option>
         <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("NO");
  mysql_select_db($dbname) or die("ddd");
mysql_db_query($dbname,"SET NAMES UTF8");
  $sql = "select * from type_package"; 
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
    </select>
  </p>
  <p><br>
    
    <strong><font color="#00CC99" size="+2">SHORT DETAIL </font></strong><br>
    <textarea name="s_detail" cols="150" rows="5"></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">Detail</font></strong><br>
    <textarea name="detail" cols="150" rows="5"></textarea>
    <br> 
    <strong><font color="#00CC99" size="+2">Itineray</font></strong><br>
    <textarea name="itineray" cols="150" rows="5"></textarea>
    <br>
    <strong><font color="#00CC99" size="+2">Price</font></strong><br>
    <input name="price" type="text" size="150" maxlength="255"><br>
    <br>   
    <strong><font color="#00CC99" size="+2">Include</font></strong><br>
    <textarea name="include" cols="150" rows="5"></textarea>
    <br>
      <br>   
    <strong><font color="#00CC99" size="+2">Exclude</font></strong><br>
    <textarea name="exclude" cols="150" rows="5"></textarea>
    <br>   
      <br>   
    <strong><font color="#00CC99" size="+2">Remark</font></strong><br>
    <textarea name="remark" cols="150" rows="5"></textarea>
    <br> 
      <br>   
    <strong><font color="#00CC99" size="+2">What to bring</font></strong><br>
    <textarea name="whattobring" cols="150" rows="5"></textarea></p> 
 

    <br>
    <strong><font color="#00CC99" size="+2">Latitude</font></strong><br>
    <input name="latitude" type="text" size="150" maxlength="255"disabled="disabled"><br>
    <br>
    <strong><font color="#00CC99" size="+2">Longitude</font></strong><br>
    <input name="longitude" type="text" size="150" maxlength="255"disabled="disabled">
     <br>
  </p>
  <p>Online now :
  <select id="active" name="active">                      
    
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>
  </p>
  <p><br />
    <input type="submit" name="send" value="ADD">
  </p>
</form>
</div>

</div>
</div>
</div>
</div>
</div>
<?php 
include("footer.php"); 
?> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
