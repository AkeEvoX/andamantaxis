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
<script type="text/javascript" src="jquery/jquery-ui/js/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	
	function input_checked(){
		if ($("#transfer0").is(':checked')===true)
			$("#group_departure").hide("fold",500);
		else
			$("#group_departure").show("fold",500);
	
	}
	input_checked();
	
	$("input[name='transfer']").click(function(){
		input_checked();
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
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/dot-luv/jquery-ui.min.css"/>
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
			//exit($_GET["num_route"]);

		$num_route	= $_GET["num_route"];
		$adults = 2;
			
		if ($num_route != ""){
			$route_data = $_SESSION["s_route"][$num_route];
			
			$province1 		= $route_data[0];
			$location1 		= $route_data[1];
			$province2 		= $route_data[2];
			$location2 		= $route_data[3];
			$date1	   		= $route_data[4];
			$hour1	   		= $route_data[5];
			$min1	   		 = $route_data[6];
			$date2 	   		= $route_data[7];
			$hour2 			= $route_data[8];
			$min2 			 = $route_data[9];
			$adults 		   = $route_data[10];
			$children		 = $route_data[11];
			$infants		  = $route_data[12];
			$transfer		 = $route_data[13];
			//print_r($route_data);
			if ($adults == "")
				$adults = 2;
	?>
    <input type="hidden" id="province1_data" value="<?php echo $province1 ?>" />
    <input type="hidden" id="location1_data" value="<?php echo $location1 ?>" />
    <input type="hidden" id="province2_data" value="<?php echo $province2 ?>" />
    <input type="hidden" id="location2_data" value="<?php echo $location2 ?>" />
    <script type="text/javascript">
	$(document).ready(function(e) {
        $("#province1").load("server/province.php?province1=<?php echo $province1 ?>");
		$("#province1").change();
		$("#location1").change();
		$("#province2").change();
    });
	</script>
    <?php }  ?>
    <form id="formSearch" name="form1" method="post" action="get-quote.php">
      <table width="1156" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="6"><h1>Book Your Transfer </h1></td>
        </tr>
        <tr>
          <td width="130"><h3>1 - Where?</h3></td>
          <td width="297">&nbsp;</td>
          <td width="137"><h3>2 - When?</h3></td>
          <td width="328">&nbsp;</td>
          <td width="149"><h3>3 - Who?</h3></td>
          <td width="66">&nbsp;</td>
        </tr>
        <tr>
          <td>Transfer Type :</td>
          <td><span class="r-s2">
            <input name="transfer" type="radio" class="s2" id="transfer0" value="1" <?php if ($transfer==1) echo "checked"; ?> />
            One way
            &nbsp;&nbsp;
            <input name="transfer" type="radio" class="s2" id="transfer1" value="2" <?php if ($transfer!=1) echo "checked"; ?> />
            Return
            <br />
          </span></td>
          <td> Arrival date :</td>
          <td><span class="s3">
            <input name="date1" type="text" class="s2" id="date1" value="<?php if ($date1!="") echo $date1 ; else echo date("d-m-Y",time()+(60*60*24*3)) ?>" size="15" />
          </span></td>
          <td>Adults (12+) :</td>
          <td><select name="adults" class="s2" id="adults">
    
            <?php for ($i=1; $i<=99; $i++){ ?>
            <option value="<?php echo $i ?>" <?php if ($i==$adults) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
            <?php } ?>
          </select></td>
        </tr>
        <tr>
          <td><strong>Origin</strong></td>
          <td>&nbsp;</td>
          <td>Arrival time :</td>
          <td><select name="hour1" class="s2" id="hour1">
            <?php for ($i=0; $i<24; $i++){ ?>
            <option value="<?php echo $i ?>" <?php if ($hour1==$i) echo "selected"; elseif ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
            <?php } ?>
          </select>
            &nbsp;
            <select name="min1" class="s2" id="min1">
              <?php for ($i=0; $i<60; $i+=5){ ?>
              <option value="<?php echo $i ?>" <?php if ($min1==$i) echo "selected"; elseif ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
              <?php } ?>
            </select></td>
          <td>Children (3-11) :</td>
          <td><select name="children" class="s2" id="children">
            <?php for ($i=0; $i<=99; $i++){ ?>
            <option value="<?php echo $i ?>" <?php if ($i==$children) echo "selected" ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
            <?php } ?>
          </select></td>
        </tr>
        <tr>
          <td>Province :</td>
          <td><span class="s3">
            <select name="province1" class="s2" id="province1">
            </select>
          </span></td>
          <td colspan="2" rowspan="2">
             <span>
              <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0"id="group_departure">
				<tr>
                <td width="143">Departure date :</td>
          <td><span class="s3">
            <input name="date2" type="text" class="s2" id="date2" value="<?php if ($date2!="") echo $date2 ; else echo date("d-m-Y",time()+(60*60*24*3)) ?>" size="15" />
          </span></td>
          </tr>
          <tr>
          <td>Departure time :</td>
          <td><select name="hour2" class="s2" id="hour2">
            <?php for ($i=0; $i<24; $i++){ ?>
            <option value="<?php echo $i ?>" <?php if ($hour2==$i) echo "selected"; elseif ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
            <?php } ?>
          </select>
            &nbsp;
            <select name="min2" class="s2" id="min2">
              <?php for ($i=0; $i<60; $i+=5){ ?>
              <option value="<?php echo $i ?>" <?php if ($min2==$i) echo "selected"; elseif ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
              <?php } ?>
            </select></td>
          		</tr>
              </table>
              </span>
          </td>          
          <td>Infants (0-2) :</td>
          <td><select name="infants" class="s2" id="infants">
            <?php for ($i=0; $i<=99; $i++){ ?>
            <option value="<?php echo $i ?>" <?php if ($i==$infants) echo "selected" ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
            <?php } ?>
          </select></td>
        </tr>
        <tr>
          <td>Location :</td>
          <td><span class="s3">
            <select name="location1" class="s2" id="location1">
            </select>
          </span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Destination</strong></td>
          <td>&nbsp;</td>
          <td colspan="4" rowspan="3" align="right" valign="bottom"><a href="get-quote.php?num_route=<?php echo $num_route ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image40','','../images/get-quote-r.png',1)">
            <input type="hidden" id="num_route" name="num_route" value="<?php echo $num_route ?>" />
            <input type="image" name="imageField" id="imageField" src="images/get-quote.png" />
          </a></td>
        </tr>
        <tr>
          <td>Province :</td>
          <td><span class="s3">
            <select name="province2" class="s2" id="province2">
            </select>
          </span></td>
        </tr>
        <tr>
          <td>Location :</td>
          <td><span class="s3">
            <select name="location2" class="s2" id="location2">
            </select>
          </span></td>
        </tr>
      </table>
    </form>
    <!-- InstanceEndEditable -->      <p>&nbsp;</p></td>
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