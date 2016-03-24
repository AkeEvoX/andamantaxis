<?php ob_start(); ?>
<?php require_once('include/connect.php'); ?>
<?php require_once('include/function.php'); ?>
<?php require_once('link.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/home.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<link href="css/index.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
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
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/dot-luv/jquery-ui.min.css"/>
<!-- InstanceEndEditable -->
</head>

<body onload="MM_preloadImages('images/3-3R.jpg','images/3-4R.jpg','images/1-9R.jpg','images/1-11R.jpg','images/b-signup-R.jpg','images/get-quote-r.jpg','images/5-1_02-r.jpg','images/5-2_02-r.jpg','images/5-3_02-r.jpg','images/4-2-1_02-r.jpg')">
<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" bgcolor="#D0EBFF"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="55" align="left" valign="top"><img src="images/1-1.jpg" width="55" height="79" /></td>
        <td width="9" align="left" valign="top"><img src="images/1-2.jpg" width="9" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="index.php"><img src="images/1-3.jpg" width="102" height="79" border="0" /></a></td>
        <td width="8" align="left" valign="top"><img src="images/1-4.jpg" width="8" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="destinations.php"><img src="images/1-5.jpg" name="Image41" width="102" height="79" border="0" id="Image41" /></a></td>
        <td width="7" align="left" valign="top"><img src="images/1-6.jpg" width="7" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="type-of-transfer.php"><img src="images/1-7.jpg" name="Image42" width="102" height="79" border="0" id="Image42" /></a></td>
        <td width="8" align="left" valign="top"><img src="images/1-8.jpg" width="8" height="79" /></td>
        <td width="101" align="left" valign="top"><a href="about-us.php"><img src="images/1-9.jpg" name="Image43" width="101" height="79" border="0" id="Image43" /></a></td>
        <td width="9" align="left" valign="top"><img src="images/1-10.jpg" width="9" height="79" /></td>
        <td width="102" align="left" valign="top"><a href="contact-us.php"><img src="images/1-11.jpg" name="Image44" width="102" height="79" border="0" id="Image44" /></a></td>
        <td width="8" align="left" valign="top"><img src="images/1-12.jpg" width="8" height="79" /></td>
        <td width="270" align="center" valign="middle">
        <?php if (is_array($_SESSION["s_route"]) && $_SESSION["s_route"]!=array()){ ?>
        <p><a href="booking-transfer.php">View Reservation</a></p>
        <?php } ?>
        </td>
        
        <td width="201" valign="middle">&nbsp;</td>
        <td width="196" align="right" valign="top"><img src="images/1-15.jpg" width="196" height="79" /><!-Weather in Bangkok, Thailand on your site - HTML code - weatherforecastmap.com --><!-end of code--></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#AFD1FF"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="55"><img src="images/2-1.jpg" width="55" height="201" /></td>
        <td width="401" align="left" valign="top"><a href="contact-us.php"><img src="images/2-2.jpg" width="401" height="201" border="0" usemap="#Map2" /></a></td>
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
        <td width="142" align="left" valign="top"><a href="package.php"><img src="images/3-3.jpg" name="Image37" width="142" height="100" border="0" id="Image37" /></a></td>
        <td width="142" align="left" valign="top"><a href="best-destinations.php"><img src="images/3-4.jpg" name="Image38" width="142" height="100" border="0" id="Image38" /></a></td>
        <td width="142" align="left" valign="top"><img src="images/3-5.jpg" name="Image50" width="142" height="100" border="0" id="Image50" /></td>
        <td width="141" align="left" valign="top"><img src="images/3-6.jpg" name="Image51" width="141" height="100" border="0" id="Image51" /></td>
        <td width="208" align="left" valign="top"><img src="images/3-7_01.jpg" width="208" height="100" /></td>
        <td width="113" align="left" valign="top"><img src="images/3-7_02.jpg" name="Image52" width="113" height="100" border="0" id="Image52" /></td>
        <td width="104" align="left" valign="top"><a href="member-login.php?goto=<?php echo $_SERVER['PHP_SELF'] ?>"><img src="images/3-7_03.jpg" name="Image53" width="113" height="100" border="0" id="Image53" /></a></td>
        <td width="84" align="left" valign="top"><img src="images/3-7_04.jpg" width="75" height="100" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#C6E2FA"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="441" height="1001" align="left" valign="top"><table width="100" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="677" align="left" valign="top" background="images/4-1-1.jpg" bg><!-- InstanceBeginEditable name="content" -->
<?php
	if ($_POST["email"]!=""){
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$num_route = trim($_POST["num_route"]);
		
		$sql = "select * from member where mem_contact_email = '$email'";
		$conn->query($sql);
		$row = $conn->fetchArray();
		
		if ($row["mem_contact_email"]==""){
			echo "<script>alert('This username doesn\'t found in system');</script>";
		}elseif ($row["mem_password"]!=$password){
			echo "<script>alert('This password is incorrect');</script>";
		}else{
			$_SESSION["s_mem_id"]       = $row["mem_id"];
			$_SESSION["s_mem_username"] = $row["mem_contact_email"];
			$_SESSION["s_mem_name"]     = $row["mem_contact_firstname"]." ".$row["mem_contact_lastname"];
			
			if ($goto=="")
				$goto = "/index.php";

			exit("<script>window.location='http://".$_SERVER['HTTP_HOST']."$goto?num_route=$num_route'</script>");	
		}
	}
?>
              <form id="formSearch" name="formSearch" method="post" action="get-quote.php">
                <table width="321" border="0" cellpadding="0" cellspacing="0" class="table-midtop1">
                  <tr>
                    <td colspan="2" class="s1">Search for your transfer</td>
                  </tr>
                  <tr>
                    <td colspan="2"><p>
                      <label>
                        <input name="transfer" type="radio" class="s2" id="transfer0" value="1" />
                        <span class="s2"> One way </span></label>
                      <label>
                        <input name="transfer" type="radio" class="s2" id="transfer1" value="2" checked="checked" />
                        <span class="s2">Return</span></label>
                      <br />
                    </p></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="s3"><h3><strong>Origin</strong></h3></td>
                  </tr>
                  <tr>
                    <td width="113" height="21" class="s3">Province:</td>
                    <td width="208" height="21" class="s3"><select name="province1" class="s2" id="province1">
                    </select></td>
                  </tr>
                  <tr>
                    <td class="s3">Location:</td>
                    <td class="s3"><select name="location1" class="s2" id="location1">
                    </select></td>
                  </tr>
                  <tr>
                    <td colspan="2"><h3><strong>Destination</strong></h3></td>
                  </tr>
                  <tr>
                    <td><span class="s3">Province:</span></td>
                    <td><span class="s3">
                      <select name="province2" class="s2" id="province2">
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td><span class="s3">Location:</span></td>
                    <td><span class="s3">
                      <select name="location2" class="s2" id="location2">
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td class="s3">Arrival date:</td>
                    <td class="s3"><input name="date1" type="text" class="s2" id="date1" value="<?php echo date("d-m-Y",time()+(60*60*24*3)) ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <td class="s3">Arrival time:</td>
                    <td><select name="hour1" class="s2" id="hour1">
                      <?php for ($i=0; $i<24; $i++){ ?>
                      <option value="<?php echo $i ?>" <?php if ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select>
                      &nbsp;
                      <select name="min1" class="s2" id="min1">
                        <?php for ($i=0; $i<60; $i+=5){ ?>
                        <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                        <?php } ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td colspan="2"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="group_departure">
                      <tr>
                        <td class="s3" width="113"><span>Departure date:</span></td>
                        <td class="s3"><span>
                          <input name="date2" type="text" class="s2" id="date2" value="<?php echo date("d-m-Y",time()+(60*60*24*3)) ?>" size="15" />
                        </span></td>
                      </tr>
                      <tr>
                        <td class="s3"><span>Departure time:</span></td>
                        <td><span>
                          <select name="hour2" class="s2" id="hour2">
                            <?php for ($i=0; $i<24; $i++){ ?>
                            <option value="<?php echo $i ?>" <?php if ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                            <?php } ?>
                          </select>
                          &nbsp;
                          <select name="min2" class="s2" id="min2">
                            <?php for ($i=0; $i<60; $i+=5){ ?>
                            <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                            <?php } ?>
                          </select>
                        </span></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="s3">Adults (12+):</td>
                    <td><select name="adults" class="s2" id="adults">
                      <?php for ($i=1; $i<=99; $i++){ ?>
                      <option value="<?php echo $i ?>" <?php if ($i==2) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="s3">Children (3-11):</td>
                    <td><select name="children" class="s2" id="children">
                      <?php for ($i=0; $i<=99; $i++){ ?>
                      <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="s3">Infants (0-2):</td>
                    <td><select name="infants" class="s2" id="infants">
                      <?php for ($i=0; $i<=99; $i++){ ?>
                      <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" class="s5"><input type="image" name="imageField" id="imageField" src="images/get-quote.jpg" /></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="s6">Arrive in style and on time</td>
                  </tr>
                  <tr>
                    <td colspan="2" class="s9">Booking in under 3 minutes!</td>
                  </tr>
                </table>
              </form>
            
			<!-- InstanceEndEditable --></td>
            </tr>
          <tr>
            <td align="left" valign="top"><img src="images/4-1-3.jpg" width="441" height="324" border="0" usemap="#Map" /></td>
          </tr>
          </table></td>
        <td width="252" align="left" valign="top"><table width="200" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top"><img src="images/4-2-1_01.jpg" /></td>
            </tr>
          <tr>
            <td align="left" valign="top"><a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image49','','images/4-2-1_02-r.jpg',1)"><img src="images/4-2-1_02.jpg" name="Image49" width="407" height="86" border="0" id="Image49" /></a></td>
          </tr>
          <tr>
            <td align="left" valign="top"><img src="images/4-2-2.jpg" width="407" height="349" /></td>
            </tr>
          <tr>
            <td align="left" valign="top"><img src="images/4-2-3.jpg" width="407" height="371" /></td>
            </tr>
        </table></td>
        <td width="587" align="left" valign="top"><table width="200" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top"><img src="images/4-3-1.jpg" width="432" height="418" /></td>
            </tr>
          <tr>
            <td height="280" align="left" valign="top">
            <div style="background-color:#FFF; 
            			border-radius: 10px; 
                        width:355px; 
                        height:235px;
                        padding-top:1px;
                        margin-left:20px">
            <form id="frmDiscount" name="form3" method="post" action="">
              <table width="333" border="0" cellpadding="0" cellspacing="0" class="mid-right2">
                <tr>
                  <td class="s1">Login For Agent</td>
                </tr>
                <tr>
                  <td class="r-s2">Email Address :</td>
                </tr>
                <?php if ($_SESSION["s_mem_id"]==""){ ?>
                <tr>
                  <td class="r-s3"><input type="text" name="email" id="email" value="<?php echo $email ?>"/></td>
                </tr>
                <tr>
                  <td class="r-s2">Password :</td>
                </tr>
                <tr>
                  <td class="r-s3"><input type="password" name="password" id="password" /></td>
                </tr>
                <tr>
                  <td><br /><a href="javascript:" class="r-s4" onmouseover="MM_swapImage('Image45','','images/b-signup-R.jpg',1)" onmouseout="MM_swapImgRestore()" onclick="document.getElementById('frmDiscount').submit()"><img src="images/b-signup.jpg" name="Image45" width="123" height="40" border="0" id="Image45" /></a>&nbsp;&nbsp;&nbsp;** <a href="member-forget.php">Forget Password</a></td>
                </tr>
                <?php }else{ ?>
                <tr>
                  <td class="r-s3">&nbsp;&nbsp;<?php echo $_SESSION["s_mem_username"] ?></td>
                </tr>
                <tr>
                  <td class="r-s2">Name :</td>
                </tr>
                <tr>
                  <td class="r-s3">&nbsp;&nbsp;<?php echo $_SESSION["s_mem_name"] ?></td>
                </tr>
                <tr>
                  <td><br />&nbsp;&nbsp;<a href="member-logout.php">Logout</a></td>
                </tr>
                <?php } ?>
              </table>
            </form></div></td>
            </tr>
          <tr>
            <td align="left" valign="top" style="padding:8px 0px 8px 0px">
    <!--Weather in Phuket, Thailand on your site - HTML code - weatherforecastmap.com --><div align="center"><script src="http://www.weatherforecastmap.com/weather1.php?zona=thailand_phuket"></script></div><!--end of code--></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table></td>
      </tr>
    </table></td>
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

<map name="Map" id="Map">
  <area shape="rect" coords="108,250,386,295" href="index.php" />
</map>

<map name="Map2" id="Map2">
  <area shape="rect" coords="37,87,395,122" href="index.php" />
</map>
</body>
<!-- InstanceEnd -->
</html>
<?php ob_end_flush() ?>