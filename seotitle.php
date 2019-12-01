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

# look for articles
$link->query("set names utf8");
$query = mysqli_query($link, "SELECT * 
							  FROM seo_title 
							  WHERE friendly_url = '{$_GET['url']}' ");

# if article not found then go back to aritcles list page
if(mysqli_num_rows($query) == 0){
   header('Location: https://www.andamantaxis.com/404.php');
   die();
   }
else{
	$row = mysqli_fetch_assoc($query);
	}
   	
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title><?php echo $row['Title']; ?></title>
<meta name="keywords" content="<?php echo $row['keywords']; ?>"/>
<meta name="description" content="<?php echo $row['Description']; ?>" />
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
                        <?php include 'top-header.php';?>
                                                       
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
  <?php include 'main-header.php';?>

<div class="content-section">
        <div class="container">
            <div class="row">
 <div class="col-md-5 col-sm-6">
                   <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
              <div class="col-md-12 section-title">

			<h1></h1>
           


<br>
<h2><?php echo $row['Title']; ?></h2>
<i class="fa fa-car fa-3x"></i><?php echo $row['Description']; ?>
  <br>
  <center>
    <a href="/"><img src="/images/book.png" border="0"></a>
  </center>
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
include_once('includes/articles_seo_friendly2.php');

# look for articles
$link->query("set names utf8");

	
	$query = mysqli_query($link, "SELECT * FROM seo_title,province WHERE province.province_id = seo_title.province_id");

if(mysqli_num_rows($query) == 0){
   echo "No articles found";
   }	
else{
	while($row = mysqli_fetch_assoc($query)){
		echo "<i class=\"fa fa-quote-left fa-3x fa-pull-left fa-border\"></i><div class=\"col-md-3 col-sm-3\"><div class=\"product-item-vote\"><div class=\"product-thumb\"></div> <!-- /.product-thum --><div class=\"product-content\"><h5><a href=\"/transfer/{$row['url_province']}/{$row['friendly_url']}.php\"><i class=\"fa fa-car\"></i> {$row['Title']}</a></h5><span class=\"tagline\">{$row['province_name']}<font color='#ff0000'style=\"float: right\"></font></span></div> <!-- /.product-content --></div> <!-- /.product-item-vote --></div> <!-- /.col-md-3 -->";
    	
    	}
	}
	

?>


  
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
<?php include 'site-footer.php';?>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="/js/jquery.easing-1.3.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main1.js"></script>
  <!-- Main JS  -->
  <!-- Google Map -->
			
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBONKNllKIvb_L0excnn4Hr6LczHGMPfNI&callback=initMap"
    async defer></script>
    <script type="text/javascript" src="/js/vendor/gmap3.js"></script>
		
        <!-- Google Map Init-->



</body>
</html>
<?php ob_end_flush() ?>