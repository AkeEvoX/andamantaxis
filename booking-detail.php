<?php ob_start(); ?>
<?php require_once('include/connect.php'); ?>
<?php require_once('include/function.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/work_blank.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to Andamantaxis</title>
<!-- InstanceEndEditable --> 
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #D0EBFF;
}
</style>
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
<link href="css/midtop.css" rel="stylesheet" type="text/css" />
<link href="css/div-input.css" rel="stylesheet" type="text/css" />
<link href="css/dropdown.css" rel="stylesheet" type="text/css" />
<link href="css/midright2.css" rel="stylesheet" type="text/css" />
<link href='css/bootstrap/bootstrap.css' rel='stylesheet' type='text/css' />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #D0EBFF;
}
</style>
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
<script type="text/javascript" src="jquery/jquery-ui/js/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	
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
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/ui-darkness/jquery-ui-1.10.3.custom.min.css"/><!-- InstanceEndEditable -->
</head>

<body onload="MM_preloadImages('images/3-3R.jpg','images/3-4R.jpg','images/1-5R.jpg','images/1-7R.jpg','images/1-9R.jpg','images/1-11R.jpg','images/5-1_02-r.jpg','images/5-2_02-r.jpg','images/5-3_02-r.jpg','images/btn_back-r.png')">
<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" bgcolor="#D0EBFF"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="55" align="left" valign="top"><img src="images/1-1.jpg" width="55" height="79" /></td>
        <td width="9" align="left" valign="top"><img src="images/1-2.jpg" width="9" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="index.php"><img src="images/1-3.jpg" width="102" height="79" border="0" /></a></td>
        <td width="8" align="left" valign="top"><img src="images/1-4.jpg" width="8" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="destinations.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image41','','images/1-5R.jpg',1)"><img src="images/1-5.jpg" name="Image41" width="102" height="79" border="0" id="Image41" /></a></td>
        <td width="7" align="left" valign="top"><img src="images/1-6.jpg" width="7" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="type-of-transfer.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image42','','images/1-7R.jpg',1)"><img src="images/1-7.jpg" name="Image42" width="102" height="79" border="0" id="Image42" /></a></td>
        <td width="8" align="left" valign="top"><img src="images/1-8.jpg" width="8" height="79" /></td>
        <td width="101" align="left" valign="top"><a href="about-us.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image43','','images/1-9R.jpg',1)"><img src="images/1-9.jpg" name="Image43" width="101" height="79" border="0" id="Image43" /></a></td>
        <td width="9" align="left" valign="top"><img src="images/1-10.jpg" width="9" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="contact-us.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image44','','images/1-11R.jpg',1)"><img src="images/1-11.jpg" name="Image44" width="102" height="79" border="0" id="Image44" /></a></td>
        <td width="8" align="left" valign="top"><img src="images/1-12.jpg" width="8" height="79" /></td>
        <td width="270" align="center" valign="middle">
        <?php if (is_array($_SESSION["s_route"]) && $_SESSION["s_route"]!=array()){ ?>
        <p><a href="booking-transfer.php">View Reservation</a></p>
        <?php } ?>
        </td>
        <td width="201" valign="middle"><img src="images/1-14.jpg" width="154" height="79" /></td>
        <td width="196" align="right" valign="top"><img src="images/1-15.jpg" width="196" height="79" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#AFD1FF"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="55"><img src="images/2-1.jpg" width="55" height="201" /></td>
        <td width="401" align="left" valign="top"><img src="images/2-2.jpg" width="401" height="201" border="0" usemap="#Map2" /></td>
        <td width="473" align="left" valign="top"><img src="images/2-3.jpg" width="473" height="201" /></td>
        <td width="10" align="left" valign="top"><img src="images/2-4.jpg" width="97" height="201" /></td>
        <td width="341" align="left" valign="top"><img src="images/2-5.jpg" width="254" height="201" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="62" align="left" valign="top"><img src="images/3-1.jpg" width="62" height="100" /></td>
        <td width="142" align="left" valign="top"><a href="index.php"><img src="images/3-2.jpg" width="142" height="100" border="0" /></a></td>
        <td width="142" align="left" valign="top"><a href="package.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image37','','images/3-3R.jpg',1)"><img src="images/3-3.jpg" name="Image37" width="142" height="100" border="0" id="Image37" /></a></td>
        <td width="142" align="left" valign="top"><a href="best-destinations.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image38','','images/3-4R.jpg',1)"><img src="images/3-4.jpg" name="Image38" width="142" height="100" border="0" id="Image38" /></a></td>
        <td width="142" align="left" valign="top"><img src="images/3-5.jpg" name="Image32" width="142" height="100" border="0" id="Image32" /></td>
        <td width="141" align="left" valign="top"><img src="images/3-6.jpg" name="Image33" width="141" height="100" border="0" id="Image33" /></td>
        <td width="208" align="left" valign="top"><img src="images/3-7_01.jpg" width="208" height="100" /></td>
        <td width="113" align="left" valign="top"><img src="images/3-7_02.jpg" name="Image34" width="113" height="100" border="0" id="Image34" /></td>
        <td width="104" align="left" valign="top"><a href="member-login.php?goto=<?php echo $_SERVER['PHP_SELF'] ?>&num_route=<?php if (!isset($_GET["num_route"])) echo count($_SESSION["s_route"])+1; else count($_SESSION["s_route"]) ?>"><img src="images/3-7_03.jpg" name="Image35" width="113" height="100" border="0" id="Image35" /></a></td>
        <td width="84" align="left" valign="top"><img src="images/3-7_04.jpg" width="75" height="100" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#C6E2FA"><p>&nbsp;</p>
    <!-- InstanceBeginEditable name="content" -->

    
<form action="save_booking-detail.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
<div class='container'>
	<div class='row'>
		<div class='col-md-7' >
			<div class='panel panel-primary'>
				<div class='panel-heading'>
					Payment Detail
				</div>
				<div class='panel-body'>
					Please Note: Payment is processed by DataCash, the TH's leading secure service. Your bank may ask for verification via 3-D secure. <hr />
					Payment Type : 
							<?
							//# Booking Inforatmion
							$item =$_SESSION["s_route"][0];
							
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
							
							?>
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
						<? if($item["locationtype"]=="1") { ?>
						
						<div class='form-group'>
								<label for='reserv_flight' class='col-sm-3 control-label' >Flight Arrival Number </label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_flight' name='reserv_flight' placeholder='Flight Number' />
								</div>
						</div>
						
						<? } else { ?>
						
						<div class='form-group'>
							<label for='reserv_hotel' class='col-sm-3 control-label' >Hotel Name</label>
							<div class='col-sm-5' >
							<input type='text' class='form-control' id='reserv_hotel' name='reserv_hotel' placeholder='Hotel Name' />
						</div>
						</div>
							<div class='form-group'>
								<label for='reserv_hotel_dest' class='col-sm-3 control-label' >Hotel name in Destination</label>
								<div class='col-sm-5' >
								<input type='text' class='form-control' id='reserv_hotel_dest' name='reserv_hotel_dest' placeholder='Hotel Name' />
								</div>
						</div>
						
						<? } ?>
						<div class='form-group'>
								<label for='reserv_detail' class='col-sm-3 control-label' >Detail</label>
								<div class='col-sm-8' >
								<textarea class="form-control" id='reserv_detail' name='reserv_detail' rows="3"></textarea>
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
								<label for='reserv_zipcode' class='col-sm-3 control-label' >Zipcode</label>
								<div class='col-sm-2' >
									<input type='text' class='form-control' id='reserv_zipcode' name='reserv_zipcode'  maxlength='5' />
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
									<label class='form-control'  aria-describedby="basic-addon2"  ><? echo $total ;?></label><span class="input-group-addon" id="basic-addon2">Bath</span>
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
		<input type="hidden" id='total' name="total" value="<? echo $total; ?>">
		</form>	<!-- InstanceEndEditable -->      <p>&nbsp;</p>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="1280" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="440" align="left" valign="top"><img src="images/5-1_01.jpg" width="440" height="282" /></td>
        <td width="409" align="left" valign="top"><img src="images/5-2_01.jpg" width="408" height="282" /></td>
        <td width="431" align="left" valign="top"><img src="images/5-3_01.jpg" width="432" height="282" /></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image46','','images/5-1_02-r.jpg',1)"><img src="images/5-1_02.jpg" name="Image46" width="440" height="75" border="0" id="Image46" /></a></td>
        <td width="409" align="left" valign="top"><a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image47','','images/5-2_02-r.jpg',1)"><img src="images/5-2_02.jpg" name="Image47" width="408" height="75" border="0" id="Image47" /></a></td>
        <td width="431" align="left" valign="top"><a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image48','','images/5-3_02-r.jpg',1)"><img src="images/5-3_02.jpg" name="Image48" width="432" height="75" border="0" id="Image48" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/6-1.jpg" width="1280" height="113" /></td>
  </tr>
</table>
<map name="Map2" id="Map2">
  <area shape="rect" coords="37,88,395,123" href="index.php" />
</map>
<script src='js/bootstrap.js' type='text/javascript' ></script>
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush() ?>