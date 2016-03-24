<?php ob_start(); ?>
<?php require_once('include/connect.php'); ?>
<?php require_once('include/function.php'); ?>
<? require_once('link.php');?>
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
<link rel="stylesheet" type="text/css" href="css/booking.css"/>
<script type="text/javascript" src="jquery/jquery-ui/js/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("select[name='unit']").change(function(){
		var i = $(this).attr("data-direction");
		
		var person = $(".person[data-direction="+i+"]").val();
		var seat_unit = $(".seat_unit[data-direction="+i+"]").val();
		<?php if ($_SESSION["s_mem_id"]!=""){ ?>
			var price_unit = $(".price_unit_agent[data-direction="+i+"]").val();
		<?php }else{ ?>
			var price_unit = $(".price_unit[data-direction="+i+"]").val();
		<?php } ?>
		var unit_num = $(this).val();
				
		$(".showseat[data-direction="+i+"]").html(addCommas((seat_unit*unit_num)));	
		$(".showprice[data-direction="+i+"]").html(addCommas((price_unit*unit_num).toFixed(2)));	
		$(".showpriceperson[data-direction="+i+"]").html(addCommas(((price_unit*unit_num)/person).toFixed(2)));	

	});

function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}
});
</script>
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/ui-darkness/jquery-ui-1.10.3.custom.min.css"/>
<!-- InstanceEndEditable -->
</head>

<body onload="MM_preloadImages('images/3-3R.jpg','images/3-4R.jpg','images/1-5R.jpg','images/1-7R.jpg','images/1-9R.jpg','images/1-11R.jpg','images/5-1_02-r.jpg','images/5-2_02-r.jpg','images/5-3_02-r.jpg')">
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

<?php
			
			//post data from page index or booking 
			$province1	=	$_POST["province1"];
			$location1	=	$_POST["location1"];
			$province2	=	$_POST["province2"];
			$location2	=	$_POST["location2"];
			$date1		=	$_POST["date1"];
			$hour1		=	$_POST["hour1"];
			$min1		 =	$_POST["min1"];
			$date2		=	$_POST["date2"];
			$hour2		=	$_POST["hour2"];
			$min2		 =	$_POST["min2"];
			$adults	   =	$_POST["adults"];
			$children	 =	$_POST["children"];
			$infants	  =	$_POST["infants"];
			$transfer	 =	$_POST["transfer"];
			
			$temp_booking = array("province_src"=>$_POST["province1"],
													"location_src"=>$_POST["location1"],
													"province_dist"=>$_POST["province2"],
													"location_dist"=>$_POST["location2"],
													"arrival_date"=>$_POST["date1"],
													"arrival_hour"=>$_POST["hour1"],
													"arrival_minute"=>$_POST["min1"],
													"departure_date"=>$_POST["date2"],
													"departure_hour"=>$_POST["hour2"],
													"departure_minute"=>$_POST["min2"],
													"adults"=>$_POST["adults"],
													"children"=>$_POST["children"],
													"infants"=>$_POST["infants"],
													"transfer"=>$_POST["transfer"],
													"vehicle_search"=>$_GET["vehicle_search"]
													);
			/*
			 array($province1,$location1,$province2,$location2,$date1,$hour1,		
										$min1,$date2,$hour2,$min2,$adults,$children,$infants,$transfer);
			*/
			
			
		
			//check province origin is null and then redirect to page index.php
			if ($province1==""){
				go('index.php');
			}
			
			//# Transfer with One way
			if ($transfer==1){
				$date2   = "";
				$hour2   = "";
				$min2	= "";
			}

		//// #edit booking from page booking .
		//$num_route = $_REQUEST["num_route"];
		
		
		
//	///check province & local Origin///////	
//			
//		if ($province1==0)
//		
//		alertback("Please choose origin-province");
//		
//		if ($location1==0)
//		
//		alertback("Please choose origin-location");
//	
//	///check province & local Destination///////	
//			
//		if ($province2==0)
//		
//		alertback("Please choose destination-province");
//		
//		if ($location2==0)
//		
//		alertback("Please choose destination-location");

////// update & add route//////////

	//old code
	//if (!isset($_GET["num_route"])){
	
	//#new booking
	/*
	if (!isset($_GET["num_route"])){
		
		
		if($num_route==""){
			
			$num_route=count($_SESSION["s_route"]);
			$num_route+=1;
			
			$_SESSION["s_route"][$num_route] = array($province1,$location1,$province2,$location2,$date1,$hour1,		
										$min1,$date2,$hour2,$min2,$adults,$children,$infants,$transfer);
										
		}
			
	}
	else //edit booking 
	{
		
		$province1 = $_SESSION["s_route"][$num_route][0];
		$location1 = $_SESSION["s_route"][$num_route][1];
		$province2 = $_SESSION["s_route"][$num_route][2];
		$location2 = $_SESSION["s_route"][$num_route][3];
		$date1 	 = $_SESSION["s_route"][$num_route][4];
		$hour1 	 = $_SESSION["s_route"][$num_route][5];
		$min1 	  = $_SESSION["s_route"][$num_route][6];
		$date2 	 = $_SESSION["s_route"][$num_route][7];
		$hour2 	 = $_SESSION["s_route"][$num_route][8];
		$min2 	  = $_SESSION["s_route"][$num_route][9];
		$adults 	= $_SESSION["s_route"][$num_route][10];
		$children  = $_SESSION["s_route"][$num_route][11];
		$infants   = $_SESSION["s_route"][$num_route][12];
		$transfer  = $_SESSION["s_route"][$num_route][13];		
		
	}
	*/
	
?>    
    
<p class="t-s3">Select Your Vehicle Type </p>

      <?php 
	  
	  //$vehicle_type
	  
	  	$sql = "select * from vehicle_type
				inner join travel_price ON vehicle_type.vtype_id = travel_price.vtype_id 
				inner join travel_route ON travel_route.troute_id = travel_price.troute_id 
				where vtype_status = 1 
				and tprice_bound = '$transfer' 
	and ((travel_route.tlocation_id_origin = '$location1' and travel_route.tlocation_id_destination = '$location2')
	 or (travel_route.tlocation_id_origin = '$location2' and travel_route.tlocation_id_destination = '$location1'))
				";
				
		
		if(isset($temp_booking["vehicle_search"]) && $temp_booking["vehicle_search"] != "")
		{
			$sql .= " and vehicle_type.vtype_id = " .$temp_booking["vehicle_search"];
		}
				
		$sql .= " order by vehicle_type.vtype_id ";
		
		//echo $sql."<br/>";
				
		$conn->query($sql);
		for ($i=1; $i<=$conn->numRow(); $i++){
			$row = $conn->fetchArray();
			
			/* initial meta vehicle */
			$car	=	ceil(($adults+$children+$infants)/$row["seat"]);
		    $total1 = $row["tprice_amount"] * $car;
		  	$total2 = $row["tprice_amount_agent"] * $car;
			
			$temp_booking["vehicle_type"] = $row["vtype_id"];
			$temp_booking["price"] = $total1;
			$temp_booking["price_agent"] = $total2;
			
	  ?>
      <form name="form2" method="post" action="booking-success.php?num_route=<? echo $_GET["num_route"]; ?>"  >
	  <input type='hidden' name='databooking' value='<? echo base64_encode(serialize($temp_booking)); ?>' />
	  
	  
      <input type="hidden" class="seat_unit"  data-direction="<?php echo $i ?>" value="<?php echo $row["seat"] ?>" />
      <input type="hidden" class="price_unit"  data-direction="<?php echo $i ?>" value="<?php echo $row["tprice_amount"]; ?>" />
      <input type="hidden" class="price_unit_agent"  data-direction="<?php echo $i ?>" value="<?php echo $row["tprice_amount_agent"]; ?>" />
      <input type="hidden" class="person"  data-direction="<?php echo $i ?>" value="<?php echo $children+$adults+$infants ?>" />
      
      <table width="1100" border="0" align="center" cellpadding="7" cellspacing="8" class="t-s2">
        <tr>
          <td width="136"><img src="<?php echo $row["vtype_image"] ?>" width="130" height="48" /></td>
          <td width="32" align="center"><img src="images/icon_times.png" width="32" height="54" /></td>
          <td width="97" align="center">
          <select name="unit" class="s2" data-direction="<?php echo $i ?>">
           <?php 
		   //// cal จำนวนคันรถ////////
		   
		   for ($c=$car; $c<=99; $c++){ ?>
            <option value="<?php echo $c ?>"><?php echo $c?></option>
            <?php } ?>
          </select></td>
		  
          <td width="32" align="center"><img src="images/icon_equ.png" width="32" height="54" /></td>
          <td width="41" align="center"><img src="images/suitcase.png" width="41" height="37" /></td>
          <td width="32" align="center"><img src="images/icon_plus.png" width="32" height="54" /></td>
          <td width="37" align="center"><img src="images/sym.png" width="37" height="48" /></td>
          <td width="32" align="center"><img src="images/icon_plus.png" width="32" height="54" /></td>
          <td width="46" align="center"><img src="images/clock.png" width="46" height="55" /></td>
          <td width="191" align="right"><span class="showprice" data-direction="<?php echo $i ?>"><?php //คำนวนราคารถ////////
		  
	  if ($_SESSION["s_mem_id"]!="")
		   echo number_format($total2,2); //price member
	  else
		   echo number_format($total1,2);
	  		 ?></span> Baht
           
           </td>
          <td width="174" rowspan="2" align="center">
            <input name="vtype" type="hidden" id="vtype" value="<?php echo $row["vtype_id"] ?>" />
            <input name="total1" type="hidden" id="total1" value="<?php echo $total1 ?>" />
            <input name="total2" type="hidden" id="total2" value="<?php echo $total2 ?>" />
            <input name="num_route" type="hidden" id="num_route" value="<?php echo $num_route ?>" />
            <input type="image" name="imageField" id="imageField" src="images/btn-booking.png" />
          </td>
        </tr>
        <tr>
          <td align="center" class="s2"> <?php echo $row["vtype_name"] ?></td>
          <td>&nbsp;</td>
          <td align="center" class="s2">No. of Vehicles </td>
          <td>&nbsp;</td>
          <td align="center"><span class="showseat" data-direction="<?php echo $i ?>"><?php echo $row["seat"]?></span></td>
          <td>&nbsp;</td>
          <td align="center"><?php echo "1-".$row ["seat"] ?>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="center"><?php echo $row["troute_interval"] ?></td>
          <td align="right"><span class="showpriceperson" data-direction="<?php echo $i ?>"><?php 
		  if ($_SESSION["s_mem_id"]!="")
		  	echo number_format (round ($total2/($children+$adults+$infants),2),2);
		  else
		  	echo number_format (round ($total1/($children+$adults+$infants),2),2);
		   ?>
          </span> Baht per Person</td>
        </tr>
      </table>
	  
      </form>    
      <?php } ?>
      <p>&nbsp;</p>
		<!-- InstanceEndEditable -->      
	  <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="1280" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="440" align="left" valign="top"><img src="images/5-1_01.jpg" width="440" height="282" /></td>
        <td width="409" align="left" valign="top"><img src="images/5-2_01.jpg" width="408" height="282" /></td>
        <td width="431" align="left" valign="top"><img src="images/5-3_01.jpg" width="432" height="282" /></td>
      </tr>
      <tr>
		<? echo $bottonlink;   ?>
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