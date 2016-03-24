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
<table width="1000" cellspacing="1" cellpadding="0">
  <tr>
          <td width="612" valign="top"><table width="612" border="0" cellpadding="4" cellspacing="0" class="t1">
            <tr>
              <td colspan="4" bgcolor="#FFFFFF"><h2 class="t4">Payment Details</h2></td>
              </tr>
            <tr>
              <td colspan="4" bgcolor="#F9F9F9"><table width="540" border="0" align="center" cellpadding="3" cellspacing="4">
                <tr>
                  <td bgcolor="#FFFFFF"><span class="t7">Please Note:</span> <span class="t8">Payment is processed by DataCash, the TH's leading secure service.  Your bank may ask for verification via 3-D secure. </span></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td width="200" valign="top" bgcolor="#F9F9F9">Payment Type:</td>
              <td colspan="3" bgcolor="#F9F9F9">
              <?php
			  	$sql2 = "select * from payment
						 where payment_status = 1
						 order by payment_id";
				$conn2->query($sql2);
				while ($row2 = $conn2->fetchArray()){
			  ?>
              <input name="reserv_payment" type="radio" value="<?php echo $row2["payment_id"] ?>" <?php if ($row2["payment_id"]==1) echo "checked" ?>/>&nbsp;&nbsp;<?php echo $row2["payment_name"] ?><br />
              <?php } ?>
              </td>
            </tr>
            <tr>
              <td colspan="4" bgcolor="#FFFFFF"><h3 class="t5">Custom Details</h3></td>
            </tr>
            <tr>
              <td colspan="2" valign="top" bgcolor="#F9F9F9">First name :</td>
              <td colspan="2" bgcolor="#F9F9F9"><input name="reserv_firstname" type="text" id="reserv_firstname" />
              <span class="error">*</span></td>
              </tr>
            <tr>
              <td colspan="2" valign="top" bgcolor="#F9F9F9">Last name :</td>
              <td colspan="2" bgcolor="#F9F9F9"><input type="text" name="reserv_lastname" id="reserv_lastname" />
              <span class="error">*</span></td>
              </tr>
            <tr>
              <td colspan="2" valign="top" bgcolor="#F9F9F9">E-mail address :</td>
              <td colspan="2" bgcolor="#F9F9F9"><input type="text" name="reserv_email" id="reserv_email"  />
              <span class="error">*</span></td>
              </tr>
            <tr>
              <td colspan="2" valign="top" bgcolor="#F9F9F9">Mobile : </td>
              <td colspan="2" bgcolor="#F9F9F9"><input name="reserv_mobile" type="text" id="reserv_mobile" maxlength="10" />
              <span class="error">*</span></td>
              </tr>
              <td height="107" colspan="2" valign="top" bgcolor="#F9F9F9">Detail :</td>
              <td colspan="2" bgcolor="#F9F9F9"><label for="textfield"></label>
                <label for="Detail"></label>
                <textarea name="reserv_detail" id="reserv_detail" cols="40" rows="5"></textarea>
</td>
              <tr>
                <td height="39" colspan="4" bgcolor="#FFFFFF"><h3 class="t5">Billing Details<br />
                </h3></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#F9F9F9">Use passenger details: </td>
                <td colspan="2" bgcolor="#F9F9F9"><input name="use_detail" type="checkbox" id="use_detail" value="1" /></td>
              </tr>
              <tr>
                <td colspan="4" bgcolor="#F9F9F9"><span id="billing_detail">
                  <table width="600" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td bgcolor="#F9F9F9" width="210">Address :</td>
                      <td bgcolor="#F9F9F9"><textarea name="reserv_address" cols="40" rows="5" id="reserv_address"></textarea>
                        <span class="error">*</span></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F9F9F9">Zipcode :</td>
                      <td bgcolor="#F9F9F9"><input name="reserv_zipcode" type="text" id="reserv_zipcode" size="10" maxlength="5" />
                        <span class="error">*</span></td>
                    </tr>
                  </table>
                </span></td>
              </tr>
              <tr align="center">
              <td height="47" colspan="4" bgcolor="#FFFFFF"><a href="booking-transfer.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image39','','images/btn_back-r.png',1)"><img src="images/btn_back.png" alt="Andamantaxis" name="Image39" width="117" height="33" id="Image39" />
                <input type="image" name="btnSubmit" id="btnSubmit" src="images/bApply.png" />
              </a></td>
            </tr>
          </table></td>
          <td width="383" valign="top"><?php
			
		
//		echo "<pre>";
//		print_r($_SESSION["s_route"]);
//		echo "</pre>";
//		exit();

		$grandtotal = 0;
		$route_data = $_SESSION["s_route"];
	
	
	foreach ($route_data as $index=>$val){
	?>
            <table width="380" border="0" align="center" cellpadding="0" cellspacing="5">
              <tr>
                <td width="10">&nbsp;</td>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td colspan="2" bgcolor="#68A9D9" style="font-size:18px; font-weight:bold; color:#FFF; padding-left:8px">Book Your Transfer# <?php echo ++$count ?></td>
                    </tr>
                  <tr>
                    <td width="38%" valign="top" bgcolor="#FFFFFF" style="padding-left:18px">
                      <em>Origin :</em> <br />
                      <em>Destination : </em><br />
                      <em>Amount :</em> <br /> 
                      <em>By :</em> </td>
                    <td width="62%" valign="top" bgcolor="#FFFFFF">
		<?php echo showprovince($val[0])?> / <?php echo showlocation($val[1]) ?><br />
        <?php echo showprovince($val[2])?> / <?php echo showlocation($val[3]) ?><br />
        <?php if ($_SESSION["s_mem_id"]!="")
				$total = $val[17]*$val[16];
			  else
				$total = $val[15]*$val[16];
			
			echo number_format($total,2);
			$grandtotal += $total;
						?>
                       <em> baht</em><br />
        <?php echo showvehicle($val[14]) ?>               
                       </td>
                  </tr>
                  <tr>
                    <td height="0" colspan="2" valign="top" bgcolor="#FFFFFF"><hr color="#CCCCCC" width="95%"/></td>
                    </tr>
                  <tr>
                    <td valign="top" bgcolor="#FFFFFF" style="padding-left:18px">
                      <em>Arrival date :</em> <br />
					  <em>Arrival time :</em> <br />
                      <?php if ($val[7]!=""){ ?>
                      <em>Departure date :</em> <br />
					  <em>Departure time :</em> 
                      <?php } ?>
                      </td>
                    <td valign="top" bgcolor="#FFFFFF">
		<?php echo changeDateMonthShow($val[4]) ?><br />
        <?php echo $val[5] ?>:<?php echo str_pad($val[6],2,"0",STR_PAD_LEFT); ?><br />
	  <?php if ($val[7]!=""){ ?>
        <?php echo changeDateMonthShow($val[7]) ?> <br />
        <?php echo $val[8] ?>:<?php echo str_pad($val[9],2,"0",STR_PAD_LEFT); ?>
      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td height="0" colspan="2" valign="top" bgcolor="#FFFFFF"><hr color="#CCCCCC" width="95%"/></td>
                    </tr>
                  <tr>
                    <td valign="top" bgcolor="#FFFFFF" style="padding-left:18px; padding-bottom:18px"><em>Adults (12+) :</em> <br />
                      <em>Children (3-11) : </em><br />
                      <em>Infants (0-2) :</em> </td>
                    <td valign="top" bgcolor="#FFFFFF">
					<?php echo $val[10] ?> <br />
                    <?php echo $val[11] ?><br />
                    <?php echo $val[12] ?></td>
                  </tr>
                </table></td>
              </tr>
            </table>
            <br />
            <?php } ?>
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
  </table>
      <h3><span class="b2">Terms, Conditions, Privacy Statement<br />
</span><span class="b1">Payment is processed by DataCash,Your bank may ask for verification via 3-D secure.</span></h3>
	<input type="hidden" name="total" value="<?php echo $grandtotal ?>">
    </form>	<!-- InstanceEndEditable -->      <p>&nbsp;</p></td>
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
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush() ?>