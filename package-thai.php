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
$query = mysqli_query($link, "SELECT * FROM type_package, package,province WHERE package.province_id = province.province_id and type_package.type=package.type and package.friendly_url  = '{$_GET['url']}' ");

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
     <title><?php echo $row['name_th']; ?></title>

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
    <link rel="stylesheet" href="/css/Slider.css">
        <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
   
    <!-- Animate CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen">
         
    
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/dot-luv/jquery-ui.min.css"/>
    <link rel="stylesheet" href="/dist/simplelightbox.min.css">
	<link rel="stylesheet" href="/css/demo.css">
  
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

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

                   <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
                         <div class="col-md-12 section-title">
              
  <i class="fa fa-home"></i> <a href="/index-th.php"><strong>หน้าหลัก</strong></a>  <i class="fa fa-arrow-right" aria-hidden="true"></i> <strong><a href="https://andamantaxis.com/package-th.php">ทัวร์ (<?php echo $row['type_name_th']; ?>)</a></strong> <i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $row['p_name_th']; ?> : <?php echo $row['name_th']; ?>
  <br>
<h3><?php echo $row['name_th']; ?></h3>
   <div id="map"></div> 
     <?php
   if($row['code']==''){
		 echo"";
		 }else{			   
		        echo"รหัสทัวร์ :";	
				echo $row['p_name_th']; 
				echo $row['code'];	

}  
?>

  <?php
   if($row['s_detail_th']==''){
		 echo"";
		 }else{			   
		        echo"<h4>รายละเอียดทัวร์</h4>";	
				echo $row['s_detail_th'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['detail_th']==''){
		 echo"";
		 }else{			   
		        echo"";	
				echo $row['detail_th'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['itin']==''){
		 echo"";
		 }else{			   
		        echo"<h4>โปรเเกรมทัวร์</h4>";	
				echo $row['itin'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['include_th']==''){
		 echo"";
		 }else{			   
		        echo"<p><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i> ราคารวม</p>";	
				echo $row['include_th'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['exclude_th']==''){
		 echo"";
		 }else{			   
		        echo"<p><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i> ราคารวมไม่รวม</p>";	
				echo $row['exclude_th'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['whattobring_th']==''){
		 echo"";
		 }else{			   
		        echo"<p><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i> เตียมตัวอย่างไร</p>";	
				echo $row['whattobring_th'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['remark_th']==''){
		 echo"";
		 }else{			   
		        echo"<h4>โปรดทราบ</h4>";	
				echo $row['remark_th'];	
				echo"<br />";	
}  
?>
  <?php
   if($row['price']==''){
		 echo"";
		 }else{		
		 echo"ราคา";	
		        echo $row['price'];
				echo"บาท";	
				echo"<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i> สนใจติดต่อที่ TH +66 (09) 5189-8535, EN +66 (09) 7005-4735<br />";	
}  
?>
  อีเมล์ <a href="https://www.andamantaxis.com/contact-us-th.php" class="fa fa-envelope"></a>

<br>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center><div class="fb-comments" data-href="https://www.andamantaxis.com/th/<?php echo $row['province_name']; ?>/<?php echo $row['friendly_url']; ?>.php" data-width="500" data-numposts="5"></div></center>
<br>

<h1 class="align-center"></h1>
		<div class="gallery">
        <div class="col-md-12 col-sm-6">
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
$query = mysqli_query($link, "SELECT * FROM img_package where id = {$row['id']}");

if(mysqli_num_rows($query) == 0){
   echo "";
   }	
else{
	while($row = mysqli_fetch_assoc($query)){
    	echo "<a href=\"/images/photos/{$row['img1_name']}\"><img src=\"/images/photos/{$row['img1_name']}\" alt=\"{$row['img1_title']}\" title=\"{$row['img1_title']}\" /></a>";
    	}
	}

?>
	</div>		

			<div class="clear"></div>

      <!-- End Content Section  -->
                </div>
             </center>
            </div>
        </div>
    </div> <!-- /.content-section -->
<?php include 'th-site-footer.php';?>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="/js/jquery.easing-1.3.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main1.js"></script>

  <script type="text/javascript" src="/dist/simple-lightbox.js"></script>
<script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>
  <!-- Google Map -->
			
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfW747CwS1sUmO_YXxA7ndAsfkA7D3jiM&callback=initMap"
    async defer></script>
    <script type="text/javascript" src="/js/vendor/gmap3.js"></script>
		
        <!-- Google Map Init-->
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
$query = mysqli_query($link, "SELECT * FROM type_package, package,province WHERE package.province_id = province.province_id and type_package.type=package.type and package.friendly_url  = '{$_GET['url']}' ");

# if article not found then go back to aritcles list page
if(mysqli_num_rows($query) == 0){
   header('Location: https://www.andamantaxis.com/404.php');
   die();
   }
else{
	$row = mysqli_fetch_assoc($query);
	}
   	
?>
	<script>

      function initMap() {
        var myLatLng = {lat: <?php echo $row['latitude']; ?>, lng: <?php echo $row['longitude']; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?php echo $row['name_th']; ?>'
        });
      }
    </script>
  <!-- Main JS  -->

</body>
</html>
<?php ob_end_flush() ?>