<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>แพคเกจทัวร์ ราคาถูก ทัวร์ภาคใต้</title>
        <meta name="keywords" content="แพคเกจทัวร์ ราคาถูก ทัวร์ภาคใต้ "/>
		<meta name="description" content="แพคเกจทัวร์กระบี่ ทัวร์เหลีเป็ะ ตลอดทั้งปีราคาถูก พร้อมโปรโมชั่นลดราคาสุดคุ้ม" />
<meta name="viewport" content="width=device-width">

    <meta name="google-site-verification" content="pGzqOGmvHUnKcvUHG5DCzRdRAZe2wSgdsrx4shXt-RY" />
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104219704-1', 'auto');
  ga('send', 'pageview');

   </script>
    
   
    
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
   
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

}

div.ch1 {
  background-color: white;
  color: black;


}
div.ch3 {
  background-color: #777799;

}
</style>
   
	<style>
      #map {
        height: 360px;
		width: 100%;
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
                        <?php include 'th-top-header.php';?>
                                                       
 <li><a href="https://andamantaxis.com/package.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/package-th.php"><img src="/images/th.png" border="0">TH</a></li>

                            </ul>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
       
        <!-- /.main-header -->
  <?php include 'th-main-header.php';?>
  
<div class="content-section">
        <div class="container">
            <div class="row">
 <div class="col-md-5 col-sm-6">
                   <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
              <div class="col-md-12 section-title">
            
			<h1>แพคเกจทัวร์เที่ยวไทย</h1>
           
ให้ท่านได้พักผ่อนสบายๆ เตรียมแค่กระเป๋าเดินทางแล้วมาจอยกับเราได้เลย
<br>
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

	
	$query = mysqli_query($link, "SELECT * FROM img_package,package,province WHERE img_package.id = package.id and img_package.p_picture = 2 and package.active = 1 and province.province_id = package.province_id");

if(mysqli_num_rows($query) == 0){
   echo "No articles found";
   }	
else{
	while($row = mysqli_fetch_assoc($query)){
		echo "<div class=\"col-md-3 col-sm-3\"><div class=\"product-item-vote\"><div class=\"product-thumb\"><img src=\"/images/photos/{$row['img1_name']}\" height=\"300\" width=\"300\" alt=\"{$row['name_th']}\" title=\"{$row['name_th']}\" border=\"0\"/></div> <!-- /.product-thum --><div class=\"product-content\"><h5><a href=\"/th/{$row['url_province']}/{$row['friendly_url']}.php\">{$row['name_th']}</a></h5><span class=\"tagline\">{$row['p_name_th']}<font color='#ff0000'style=\"float: right\">ราคา {$row['price']} บาท</font></span></div> <!-- /.product-content --></div> <!-- /.product-item-vote --></div> <!-- /.col-md-3 -->";
    	
    	}
	}
	

?>
 </div> 
              </div> 
          </div>
        </div>
      </section>
      <!-- End Content Section  -->
                </div>
             </center>
            </div>
        </div>
    </div> <!-- /.content-section -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center><div class="fb-comments" data-href="https://www.andamantaxis.com/package-th.php" data-width="500" data-numposts="5"></div></center>
     <img src="/images/package1.jpg" border="0" class="img-responsive center-block">
<?php include 'th-site-footer.php';?>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="/js/jquery.easing-1.3.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main1.js"></script>
  <!-- Main JS  -->


</body>
</html>
<?php ob_end_flush() ?>