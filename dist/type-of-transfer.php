<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Types of Transfers | Airport Transfers</title>
        <meta name="keywords" content="airport transfers,resort transfers,airport taxis, low cost transfers" />
		<meta name="description" content="Private airport transfers take you and your party or family to your departure airport in your vacation region." />
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

}

div.ch1 {
  background-color: white;
  color: black;


}
</style>

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
                                                       
 <li><a href="https://andamantaxis.com/type-of-transfer.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/type-of-transfer-th.php"><img src="/images/th.png" border="0">TH</a></li>

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
                   
			<h1 class="align-center">Toyota Camry</h1>
		<div class="gallery">
			<a href="images/camry1.jpg" class="big"><img src="images/thumbs/t-camry1.jpg" alt="" title="Toyota Camry" /></a>
			<a href="images/camry2.jpg"><img src="images/thumbs/t-camry2.jpg" alt="" title="Toyota Camry"/></a>
			<a href="images/camry3.jpg"><img src="images/thumbs/t-camry3.jpg" alt="" title="Toyota Camry"/></a>
			<a href="images/camry4.jpg"><img src="images/thumbs/t-camry4.jpg" alt="" title="Toyota Camry"/></a>
			<div class="clear"></div>
            
            <a href="images/camry5.jpg" class="big"><img src="images/thumbs/t-camry5.jpg" alt="" title="Toyota Camry" /></a>
			<a href="images/camry6.jpg"><img src="images/thumbs/t-camry6.jpg" alt="" title="Toyota Camry"/></a>
			<a href="images/camry7.jpg"><img src="images/thumbs/t-camry7.jpg" alt="" title="Toyota Camry"/></a>
			<a href="images/camry8.jpg"><img src="images/thumbs/t-camry8.jpg" alt="" title="Toyota Camry"/></a>
            <a href="images/camry9.jpg"><img src="images/thumbs/t-camry9.jpg" alt="" title="Toyota Camry"/></a>
			<div class="clear"></div>
            <a href="/"><img src="/images/booknow.jpg" border="0" class="img-responsive center-block"></a>
             <h1 class="align-center">Toyota Altis</h1>
            
             <a href="images/ToyotaAltis19.jpg" class="big"><img src="images/thumbs/t-ToyotaAltis19.jpg" alt="" title="Toyota Altis" /></a>
			<a href="images/ToyotaAltis20.jpg"><img src="images/thumbs/t-ToyotaAltis20.jpg" alt="" title="Toyota Altis"/></a>
			<a href="images/ToyotaAltis21.jpg"><img src="images/thumbs/t-ToyotaAltis21.jpg" alt="" title="Toyota Altis"/></a>
			<a href="images/ToyotaAltis22.jpg"><img src="images/thumbs/t-ToyotaAltis22.jpg" alt="" title="Toyota Altis"/></a>
			<div class="clear"></div>
            <a href="/"><img src="/images/booknow.jpg" border="0" class="img-responsive center-block"></a>
            <h1 class="align-center">Commuter Van</h1>
            
             <a href="images/CommuterVan10.jpg" class="big"><img src="images/thumbs/t-CommuterVan10.jpg" alt="" title="Commuter Van" /></a>
			<a href="images/CommuterVan11.jpg"><img src="images/thumbs/t-CommuterVan11.jpg" alt="" title="Commuter Van"/></a>
			<a href="images/CommuterVan12.jpg"><img src="images/thumbs/t-CommuterVan12.jpg" alt="" title="Commuter Van"/></a>
			<a href="images/CommuterVan13.jpg"><img src="images/thumbs/t-CommuterVan13.jpg" alt="" title="Commuter Van"/></a>
            <a href="images/CommuterVan14.jpg"><img src="images/thumbs/t-CommuterVan14.jpg" alt="" title="Commuter Van"/></a>
			<div class="clear"></div>
            <a href="/"><img src="/images/booknow.jpg" border="0" class="img-responsive center-block"></a>
              <h1 class="align-center">Boat Transfer</h1>
            
             <a href="images/BoatTransfer15.jpg" class="big"><img src="images/thumbs/t-BoatTransfer15.jpg" alt="" title="Boat Transfer" /></a>
			<a href="images/BoatTransfer16.jpg"><img src="images/thumbs/t-BoatTransfer16.jpg" alt="" title="Boat Transfer"/></a>
			<a href="images/BoatTransfer17.jpg"><img src="images/thumbs/t-BoatTransfer17.jpg" alt="" title="Boat Transfer"/></a>
			<a href="images/BoatTransfer18.jpg"><img src="images/thumbs/t-BoatTransfer18.jpg" alt="" title="Boat Transfer"/></a>
			<div class="clear"></div>
            <a href="/"><img src="/images/booknow.jpg" border="0" class="img-responsive center-block"></a> 
            

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

<?php include 'site-footer.php';?>
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

  <!-- Main JS  -->

</body>
</html>
<?php ob_end_flush() ?>