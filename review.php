<?php ob_start(); ?>
<?php require_once('include/connect.php'); ?>
<?php require_once('include/function.php'); ?>
<?php require_once('link.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Reviews of Airport Transfer - Andaman Taxis</title>
        <meta name="keywords" content="Krabi airport transfer, Taxi from Krabi airport to Ao Nang" />
		<meta name="description" content="Read Airport transfer reviews - What customers say about Andaman Taxis transfers and taxis" />
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="pGzqOGmvHUnKcvUHG5DCzRdRAZe2wSgdsrx4shXt-RY" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
    <link rel="canonical" href="https://andamantaxis.com" />
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104219704-1', 'auto');
  ga('send', 'pageview');

   </script>
    
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(e) {
	
	$("input[name='transfer']").click(function(){
		if ($("#transfer0").is(':checked') ===true)
			$("#group_departure").hide("fold",500);
		else
			$("#group_departure").show("fold",500);
	});

	if ($("#province1_data").val()==null)
    	$("#province1").load("server/province.php");
		
	$("#date1").datepicker({
	  showOn: "button",
	  buttonImage: "images/calendar2.gif",
	  buttonImageOnly: true,
	  changeMonth: true,
	  changeYear: true,
	  dateFormat: "dd-mm-yy",
	  minDate: 0
	});
	$("#date2").datepicker({
	  showOn: "button",
	  buttonImage: "images/calendar2.gif",
	  buttonImageOnly: true,
	  changeMonth: true,
	  changeYear: true,
	  dateFormat: "dd-mm-yy",
	  minDate: 0
	});

	$("#province1").change(function(){
	   $("#province2").html("");
	   $("#location2").html("");
		
	   var url = "server/location.php";
	   	var param = "province="+$("#province1").val()+"&province_data="+$("#province1_data").val()+"&location_data="+$("#location1_data").val();

   		$.ajax({
		   	url      : url,
			data     : param,
			dataType : "html",
			type     : "POST",
			success: function(result){			  
				$("#location1").html(result);	
			}
	   	});	
	});
	
	$("#location1").change(function(){
	   var url = "server/province_dest.php";
	   var param = "location1="+$("#location1").val()+"&province_data="+$("#province2_data").val()+"&location_data="+$("#location1_data").val();
	   
   		$.ajax({
		   	url      : url,
			data     : param,
			dataType : "html",
			type     : "POST",
			success: function(result){			  
				$("#province2").html(result);	
			}
	   	});	
	});

	$("#province2").change(function(){
	   var url = "server/location_dest.php";
	   var param = "province2="+$("#province2").val()+"&location1="+$("#location1").val()+"&location1_data="+$("#location1_data").val()+"&province_data="+$("#province2_data").val()+"&location_data="+$("#location2_data").val();
	  
   		$.ajax({
		   	url      : url,
			data     : param,
			dataType : "html",
			type     : "POST",
			success: function(result){			  
				$("#location2").html(result);	
			}
	   	});	
	});

	$("#formSearch").submit(function(){
		var msg = "";
		
		if ($("#province1").val() ==""){
			msg += "Choose Province Origin\n";
		}
		if ($("#location1").val() ==""){
			msg += "Choose Location Origin\n";
		}
		if ($("#province2").val() ==""){
			msg += "Choose Province Destation\n";
		}
		if ($("#location2").val() ==""){
			msg += "Choose Location Destation\n";
		}
		
		if (msg!=""){
			alert(msg);
			return false;
		}
	});
	
});
</script>
<style type="text/css">
div.ui-datepicker, .ui-datepicker td{
 font-size:11px;
}
</style>
<style>
div.chch {
	background-image: url('/images/CarTransfer.jpg');
    
}

div.ch {
  background-color: #2a80b9;
  color: white;
  border:2px
  margin:20px; padding:20px;
}

div.ch1 {
  background-color: white;
  color: black;
  border:2px

}
</style>
<?php include 'head.php';?>
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <?php include 'top-header.php';?>
                                                       
 <li><a href="https://andamantaxis.com/"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/index-th.php"><img src="/images/th.png" border="0">TH</a></li>

                            </ul>
                            <div class="clearfix"></div>
                  </div> <!-- /.social-icons -->
              </div> <!-- /.col-md-6 -->
          </div> <!-- /.row -->
</div> <!-- /.container -->
        </div> <!-- /.top-header -->
       
        <!-- /.main-header -->
<?php include 'main-header.php';?>
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h3>What customers say about Andaman Taxis transfers and taxis</h3>
                </div> <!-- /.section -->
            </div> <!-- /.row -->
            <div class="row">
                
<div class="div.ch3">
<?php

include_once('config.php');

# connect to mysql  database
if(!$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)){
	echo 'could not connect database';
	}
    
# use database
if(!mysqli_select_db($link, $mysql_database)){
   echo "Database not found";
   die();	   
   }

# this script will create friendly URLs strings for all articles on database   
include_once('includes/articles_seo_friendly.php');

# look for articles
$link->query("set names utf8");

	
	$query = mysqli_query($link, "SELECT * FROM Review");

if(mysqli_num_rows($query) == 0){
   echo "No articles found";
   }	
else{
	while($row = mysqli_fetch_assoc($query)){
		

		
		
		 echo"<div class=\"col-md-3 col-sm-3\">";
                    echo"<div class=\"product-item-vote\">";
                        echo"<div class=\"product-thumb\">";
                            echo"<i class=\"fa fa-user-o\" aria-hidden=\"true\"></i>{$row['name']}";
                        echo"</div> <!-- /.product-thum -->";
                        echo"<div class=\"product-content\">";
						 echo"<h2>{$row['title']}</h2><br>";
                            echo"<i class=\"fa fa-quote-left fa-3x fa-pull-left fa-border\" aria-hidden=\"true\"></i>{$row['content']}";
                            echo"<span class=\"tagline\">{$row['date']} - {$row['country']}";
		                 
                        echo"</div> <!-- /.product-content -->";
                    echo"</div> <!-- /.product-item-vote -->";
                echo"</div> <!-- /.col-md-3 -->";
		
    	 if($i % 4 === 0) echo "</div><div class=\"row\">"; // close and open a div with class row

            $i++; // increment
    	}
	}
	

?>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->



<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="/js/jquery.easing-1.3.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main1.js"></script>
  <!-- Main JS  -->

</body>
</html>
<?php ob_end_flush() ?>