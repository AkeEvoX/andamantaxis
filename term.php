<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Terms and Conditions | AndamanTaxis</title>
        <meta name="keywords" content="Airport Transfers Terms and Conditions, Krabi Transfer" />
		<meta name="description" content="When you book your transfer with AndamanTaxis you agree to the following airport transfers terms and conditions." />
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
                                                       
 <li><a href="https://andamantaxis.com/term.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/term-th.php"><img src="/images/th.png" border="0">TH</a></li>

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
                   
			<h1> Terms &amp; Conditions</h1>

            <strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
 Drive
            </p>
            </strong>
<p>Our drivers are trained, safety conscious, friendly, helpful and patient.</p>
<p><br>
  <strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> 
Reservations</strong></p>
<p>For Last Minute Bookings Please Call : +66 89-694-1116</p>
<p><br>
  <strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
 Special Requests</strong></p>
<p>If you have any special requests, please let us know at the time of booking. We will endeavour to pass on all such requests to the Supplier, however we cannot guarantee that they will be met and we will have no liability to you if they are not.</p>
<p><br>
  <strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
 Changes and Cancellations</strong></p>
<p>If you need to amend or cancel your booking details, you should do so online or by emailing Admin Team , Andamantaxis@Gmail.com<br>
  Cancellations</p>
<p>If cancelled more than 5 days before booked outbound transfer date and time, there will be no cancellation charges and the value of the booking will be refunded to you in full if already paid.<br>
  If cancelled within 1 days of booked outbound transfer date and time (including ‘no show’ bookings), your booking will incur a 100% cancellation charge.<br>
  Our Responsibility</p>
<p>1. We act as a booking agent. As such, we accept no responsibility for the actual provision of services. Our responsibilities are limited to publishing information on our website about the Services the Suppliers supply; passing on reservation information to Suppliers and informing you of any enforced changes to the terms of your booking. We accept no responsibility for any information about the transfers that we pass on to you in good faith. We accept no liability for any illness, injury, death or loss of any kind. This includes loss, damage or theft of any luggage or personal belonging you or your party may be carrying. Any claim for loss, injury, illness or death should be pursued with the Supplier directly or may be covered under the terms of your insurance. We only accept liability to you for claims which arise solely as a result of our own negligence<br>
  <br>
  2. Descriptions of transfers provided are taken from information provided to us by the Supplier and we do not accept responsibility for any inaccuracies in such information, nor can liability be accepted for changes to facilities which are not communicated to us by the Supplier.<br>
  <br>
  3. In the event that we are found liable to you on any basis whatsoever, our maximum liability to you is limited to twice the cost of your booking (or the appropriate proportion of this if not everyone on the booking is affected). We do not exclude or limit any liability for death or personal injury that arises as a result of our negligence or that of any of our employees whilst acting in the course of their employment</p>
  <br>
 <div class="alert alert-info"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Meeting points: The driver will be waiting in the arrival hall, holding a sign with your name on it. For pick ups from resorts, hotels, guesthouses, villa complexes, the driver will wait in the lobby area, also with a name sign. Please ensure that you check in under the same name as under which the booking with us was made, so the hotel / resort will not turn away the driver with the statement: "that person is not a guest here"..</div>
<p><strong><em><div class="alert alert-danger"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 When you book your transfer with AndamanTaxis you agree to the following airport transfers terms and conditions.</div></em></strong></p>
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