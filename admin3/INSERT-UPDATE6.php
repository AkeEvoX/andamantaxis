<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
     <title>Add Review</title>      
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
 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                      <h2 class="pull-left">
                      </h2>
                      <p>
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
$sql="SELECT * FROM seo_title WHERE id = '$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
                      <form method="POST" name="form2"  action="insert-review6.php" onSubmit="return validateForm2()">
   <p>NAME :
 </p>ID <input name="id" type="hidden" value="<?php echo $rows['id']; ?>" size="1" maxlength="1">
  
       <br>
       Title</p>
     <p>
       <input name="Title" type="text" size="150" maxlength="255" value="<?php echo $rows['Title']; ?>">
       <br>
        <br>
       keywords</p>
     <p>
       <input name="keywords" type="text" size="150" maxlength="255" value="<?php echo $rows['keywords']; ?>">
       <br>
        <br>
       Description</p>
     <p>
       <input name="Description" type="text" size="150" maxlength="255" value="<?php echo $rows['Description']; ?>">
       <br>
       
       
       <strong>Content</strong><br>
       <textarea name="Content" cols="150" rows="5"><?php echo $rows['Content']; ?></textarea>
       <br>
       <br>
       <br />
    <input type="submit" name="send" value="ADD">
  </p>
</form>
<?php 
include("footer.php"); 
?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
                  </div>
            </div>        
        </div>
    </div>
    <a href="https://www.andamantaxis.com/admin3/index-review.php">Read Review</a>
</body>
</html>