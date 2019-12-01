<?php
ob_start(); 
require_once('include/connect.php'); 
require_once('include/function.php'); 
require_once('include/logger.php'); 
require_once('link.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Booking | AndamanTaxis</title>
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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
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

}

div.ch1 {
  background-color: white;
  color: black;


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
                                                       
 <li><a href="#"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="#"><img src="/images/th.png" border="0">TH</a></li>

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
            
			<h2>Step 2 : Check Detail</h2>
<form id="form1" name="form1" method="post" action="">
    <?php
	
		$route_data = $_SESSION["s_route"];
 	
	if ($route_data == array())
		exit("<script>window.location='index.php';</script>");
	
	//$index = 0 ;   
	$index=count($_SESSION["s_route"]) - 1;
	$val = $route_data[$index];
	
	//log_info(print_r($val,true));
	
	if ($_SESSION["s_mem_id"]!="")
	{
		  $amount = number_format($val["price_agent"] * $val["unit"] , 2);
	}
	else 
	{
		  $amount  = number_format($val["price"] * $val["unit"] , 2); 
	}
	
	?>

	<div  style='margin:0 auto; width:600px;' >
		<div class='panel panel-success'>
			<div class='panel-heading'><h3>Book Your Transfer</h3></div>
			<div class='panel-body'>
				<ul class="list-group">
				  <li class="list-group-item">
					<h4 class="list-group-item-heading">Where</h4>
					<p class="list-group-item-text">
							<div class="input-group">  
								<div class="input-group-addon" style='width:120px;'	>Origin</div>
								<label class='form-control' style='width:400px;'><?php echo showprovince($val["province_src"])?>  / <?php echo showlocation($val["location_src"]) ?></label>
							</div>
							<div class='input-group'>
								<span class="input-group-addon" style='width:120px;'>Destination</span>
								<label class='form-control' style='width:400px;'  ><?php echo showprovince($val["province_dist"])?> / <?php echo showlocation($val["location_dist"]) ?></label>
							</div>
							<div class='input-group'>
								<span class="input-group-addon" style='width:120px;'>Amount</span>
								<label class='form-control' style='width:400px;'    ><? echo $amount ;?></label>
							</div>
							<div class='input-group'>
								<span class="input-group-addon"  style='width:120px;'>Vehicle Type</span>
								<label class='form-control' style='width:400px;'  ><?php echo showvehicle($val["vehicle_type"]) ?></label>
							</div>
					</p>
				  </li>
				<li class="list-group-item">
					<h4 class="list-group-item-heading">When</h4>
					<p class="list-group-item-text">
						<div class='input-group'>
							<span class="input-group-addon" style='width:120px;'>Arrival date</span>
							<label class='form-control' style='width:400px;'    ><?php echo changeDateMonthShow($val["arrival_date"]) ?></label>
						</div>
						<div class='input-group'>
							<span class="input-group-addon" style='width:120px;'>Arrival time</span>
							<label class='form-control' style='width:400px;'    ><?php echo $val["arrival_hour"] .":".  str_pad($val["arrival_minute"],2,"0",STR_PAD_LEFT); ?></label>
						</div>
						 <?php if ($val["transfer"] == "2"){ ?>
						 <div class='input-group'>
							<span class="input-group-addon" style='width:120px;'>Departure date</span>
							<label class='form-control' style='width:400px;'    ><?php echo changeDateMonthShow($val["departure_date"]) ?> </label>
						</div>
						<div class='input-group'>
							<span class="input-group-addon" style='width:120px;'>Departure time</span>
							<label class='form-control' style='width:400px;'    ><?php echo $val["departure_hour"] .":".  str_pad($val["departure_minute"],2,"0",STR_PAD_LEFT); ?></label>
						</div>
						 
						 <? } ?>
					</p>
				  </li>
			  <li class="list-group-item">
				<h4 class="list-group-item-heading">Who</h4>
				<p class="list-group-item-text">
					<div class='input-group'>
						<span class="input-group-addon" style='width:120px;'>Adults (12+)</span>
						<label class='form-control' style='width:400px;'    ><? echo $val["adults"]; ?></label>
					</div>
					<div class='input-group'>
						<span class="input-group-addon" style='width:120px;'>Children (3-11)</span>
						<label class='form-control' style='width:400px;'    ><? echo $val["children"] ?></label>
					</div>
					<div class='input-group'>
						<span class="input-group-addon" style='width:120px;'>Infants (0-2) :</span>
						<label class='form-control' style='width:400px;'    ><? echo $val["infants"];?></label>
					</div>
				</p>
			  </li>
			  <li class="list-group-item text-center" >
				<a href='booking-detail.php' class='btn btn-success' >Submit</a>
                
				<a href='https://andamantaxis.com'  class='btn btn-danger'>Back</a>
			  </li>

			</ul>
			</div>
		</div>
	</div>
	</div>
      
    <?
	//close loop booking
	//}
	?>
    </form>	
         
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

</body>
</html>
<?php ob_end_flush() ?>