<?php ob_start(); ?>
<?php require_once('include/connect.php');   
$conn = new mysql;
$conn1 = new mysql;
$conn2 = new mysql;
?>
<?php require_once('include/function.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Booking Payment | AndamanTaxis</title>
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
    <link href="backup_webdesign/css/midtop.css" rel="stylesheet" type="text/css" />
<link href="backup_webdesign/css/div-input.css" rel="stylesheet" type="text/css" />
<link href="backup_webdesign/css/dropdown.css" rel="stylesheet" type="text/css" />
<link href="backup_webdesign/css/midright2.css" rel="stylesheet" type="text/css" />
<link href="backup_webdesign/css/booking.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<link href="backup_webdesign/css/table.css" rel="stylesheet" type="text/css" />
<link href="backup_webdesign/css/t-booking.css" rel="stylesheet" type="text/css" />
<script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104219704-1', 'auto');
  ga('send', 'pageview');

   </script>
    
   
    
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/ui-darkness/jquery-ui-1.10.3.custom.min.css"/>
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
            
			<h2>Step 3 : Payment Detail</h2>
<?
// initial parameter
//# Booking Inforatmion
$item =$_SESSION["s_route"][0];
							
?>
    
<form action="save_booking-detail.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
<div class='container'>
	<div class='row'>
		<div class='col-md-7' >
			<div class='panel panel-primary'>
				<div class='panel-heading'>
					Payment Detail
				</div>
				<div class='panel-body'>
					<b>Please Note :</b> Payment is processed by DataCash, the TH's leading secure service. Your bank may ask for verification via 3-D secure. <br/>
					<? if($item["isflight"] == "1"){ ?>
					<hr/><b>Please Note (Air Port) :</b> We need you full flight number (including airline code, for example : EZY8627). if you are travelling on a connecting flight we need the details of your final leg one.
					<? } ?>
					<hr />
					Payment Type : 
						<div id="paymentType">
						</div>
							<?
							/*
							 if ($_SESSION["s_mem_id"]!="")
								$total = $item["price_agent"]*$item["unit"];
							else
								$total = $item["price"] * $item["unit"];
			
							$total =  number_format($total,2);
							
							$sql2 = "select * from payment where payment_status = 1 order by payment_id ";
							
							$conn2->query($sql2);
							while ($row2 = $conn2->fetchArray()){
								
								$selectPayment="";
								if($row2["payment_id"]==1)
									$selectPayment = "checked";
								
								echo "<div class='radio' ><label>";
								echo "<input type='radio' name='reserv_payment'  value='". $row2["payment_id"]."'  ".$selectPayment ." />  ";
								echo $row2["payment_name"];
								echo "</label></div>";
							}
							*/
							?>
                            <br><font color="#FF0000">Remark : Pay at Driver available for Pickup at Krabi Airport only.</font>
				</div>
				<div class='panel-heading'>
					Customer Detail
				</div>
				<div class='panel-body'>
					<div class='form-horizontal'>
						<div class='form-group'>
								<label for='reserv_firstname' class='col-sm-3 control-label' >First Name </label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_firstname' name='reserv_firstname' placeholder='Firstname' />
								</div>
						</div>
						<div class='form-group'>
								<label for='reserv_lastname' class='col-sm-3 control-label' >Last Name </label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_lastname' name='reserv_lastname' placeholder='Lastname' />
								</div>
						</div>
						<div class='form-group'>
								<label for='reserv_email' class='col-sm-3 control-label' >E-Mail Address</label>
								<div class='col-sm-5' >
								<input type='email' class='form-control' id='reserv_email' name='reserv_email' placeholder='E-Mail' />
								</div>
						</div>
						<div class='form-group'>
								<label for='reserv_mobile' class='col-sm-3 control-label' >Mobile</label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_mobile' name='reserv_mobile' placeholder='Mobile' maxlength='10' />
								</div>
						</div>
						<? if($item["isflight"]=="1") { ?>
						
						<div class='form-group'>
								<label for='reserv_flight' class='col-sm-3 control-label' >Flight Arrival Number </label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_flight' name='reserv_flight' placeholder='Flight Arrival Number' />
								</div>
						</div>
							<div class='form-group'>
									<label for='reserv_flight' class='col-sm-3 control-label' >Flight Departure Number </label>
									<div class='col-sm-5' >
									<input type='text' class='form-control' id='reserv_flight_departure' name='reserv_flight_departure' placeholder='Flight Departure Number' />
									</div>
							</div>
						<? } else { ?>
						
						<div class='form-group'>
							<label for='reserv_hotel' class='col-sm-3 control-label' >Pickup from (Hotel)</label>
							<div class='col-sm-5' >
							<input type='text' class='form-control' id='reserv_hotel' name='reserv_hotel' placeholder='Pickup from (Hotel)' />
						</div>
						</div>
							<div class='form-group'>
								<label for='reserv_hotel_dest' class='col-sm-3 control-label' >Drop off (Hotel)</label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_hotel_dest' name='reserv_hotel_dest' placeholder='Drop off (Hotel)' />
								</div>
						</div>
						
						<? } ?>
						<div class='form-group'>
								<label for='reserv_detail' class='col-sm-3 control-label' >Special Request</label>
								<div class='col-sm-8' >
								<textarea class="form-control" id='reserv_detail' name='reserv_detail' rows="3" placeholder='Special Request'></textarea>
								</div>
						</div>
					</div>
				</div>
				<div class='panel-heading'>
					Billing Details
				</div>
				<div class='panel-body'>
					<div class='radio'>
						<label >
							<input type='checkbox' id='use_detail' name='use_detail' />
							use passenger detail 
						</label>
					</div>
					<hr/>
					<div id="billing_detail">
						<div class='form-horizontal'>
							<div class='form-group'>
								<label for='reserv_address' class='col-sm-3 control-label' >Address</label>
								<div class='col-sm-8' >
									<textarea class='form-control' id='reserv_address' name='reserv_address' rows='3' ></textarea>
								</div>
							</div>
							<div class='form-group'>
								<label for='reserv_zipcode' class='col-sm-4 col-md-3 control-label' >Zipcode</label>
								<div class='col-sm-4 col-md-4' >
									<input type='text' class='form-control' id='reserv_zipcode' name='reserv_zipcode'  maxlength='10' />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='panel-footer'>
				<a href='booking-transfer.php' class='btn btn-warning' type='button' id='btnback'>Back</a>&nbsp;<button type='submit' class='btn btn-success' id='btnapply'>Apply</button>
				</div>
			</div>
		</div>
		<div class='col-md-5'>
		<div class='panel panel-info'>
			<div class='panel-heading'>
			Booking Summary	
			</div>
			<div class='panel-body'>
				<div class='form-horizontal'>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Origin :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo showprovince($item["province_src"])." / ".showlocation($item["location_src"]); ?><span>
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Destination  :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo showprovince($item["province_dist"])." / ". showlocation($item["location_dist"]); ?><span>
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Amount   :</label>
						<div class='col-sm-8' >
							<div class='input-group'>
									<label class='form-control'  aria-describedby="basic-addon2"  ><? echo $total ;?></label><span class="input-group-addon" id="basic-addon2">Baht</span>
							</div>
							
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >By   :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo showvehicle($item["vehicle_type"]); ?><span>
						</div>
					</div>
					<hr/>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Arrival date   :</label>
						<div class='col-sm-8' >
							<span class='form-control'><?  echo changeDateMonthShow($item["arrival_date"]);?><span>
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Arrival time   :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo $item["arrival_hour"].":".str_pad($item["arrival_minute"],2,"0",STR_PAD_LEFT);?><span>
						</div>
					</div>
					<? if($item["transfer"] == "2"){ ?>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Departure date   :</label>
						<div class='col-sm-8' >
							<span class='form-control'><?  echo changeDateMonthShow($item["departure_date"]);?><span>
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Departure time    :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo $item["departure_hour"].":".str_pad($item["departure_minute"],2,"0",STR_PAD_LEFT); ?><span>
						</div>
					</div>
					<? } ?>
					<hr/>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Adults (12+) :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo $item["adults"];?><span>
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Children (3-11):</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo $item["children"];?><span>
						</div>
					</div>
					<div class='form-group form-group-sm'>
						<label class='col-sm-4 control-label' >Infants (0-2) :</label>
						<div class='col-sm-8' >
							<span class='form-control'><? echo $item["infants"];?><span>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	
		<div class="jumbotron">
		  <h3>Terms, Conditions, Privacy Statement</h3>
		  <p>Payment is processed by DataCash,Your bank may ask for verification via 3-D secure.</p>
		</div>
		</div>
		<input type="hidden" id='total' name="total" value="">
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
<script>window.jQuery || document.write('<script src="jquery/jquery-ui/js/jquery-1.10.2.js"><\/script>')</script>
<script src="/js/jquery.easing-1.3.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main1.js"></script>
  <!-- Main JS  -->
  <!--jquery.min.js-->
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/notifyApp.js"></script>
	<script type="text/javascript" src="js/controls.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	
	/* initial control */
	
	$(document).ready(function(){
		controls.setPaymentType("paymentType");
		controls.setPaymentPrice("total");
	});
	
	/* initial control */
	
    $("#use_detail").change(function(){
		if ($(this).prop("checked")==true)
			$("#billing_detail").show(500);
		else
			$("#billing_detail").hide(500);
	});
	
	$("#use_detail").change();
	
	$("#form2").submit(function(){
		
		var msg = "";
		
		if ($("#reserv_firstname").val() ==""){
			msg += "   Enter First name\n";
		}
		if ($("#reserv_lastname").val() ==""){
			msg += "   Enter Last name\n";
		}
		if ($("#reserv_email").val() ==""){
			msg += "   Enter E-mail address\n";
		}else{
			if (!isValidEmailAddress($("#reserv_email").val())){
				msg += "   Check Format E-mail address\n";
			}
		}
		if ($("#reserv_mobile").val() ==""){
			msg += "   Enter Mobile\n";
		}
		if ($("#use_detail").prop("checked")==true){
			if ($("#reserv_address").val() ==""){
				msg += "   Enter Address\n";
			}
			if ($("#reserv_zipcode").val() ==""){
				msg += "   Enter Zipcode\n";
			}
		}
		
		if (msg!=""){
			alert("*** Please Check ***\n\n"+msg);
			return false;
		}
	});
	
	$("#reserv_mobile").keypress(function(e){
		numberOnly(e);
	});
	
	function numberOnly(evt){
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		
		if (key!=8 && key!=46 && key!=37 && key!=39){
			key = String.fromCharCode(key);
			var regex = /[0-9]|\./;
			
			if (!regex.test(key)){
				theEvent.returnValue = false;
				if (theEvent.preventDefault) theEvent.preventDefault();
			}
		}
	}
	
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		return pattern.test(emailAddress);
	};

});
</script>

</body>
</html>
<?php ob_end_flush() ?>