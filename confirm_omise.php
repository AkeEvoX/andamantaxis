<?php ob_start(); ?>
<?php require_once('include/connect.php');  $conn = new mysql; ?>
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
<!-- InstanceEndEditable -->
</head>

<body onload="MM_preloadImages('images/3-3R.jpg','images/3-4R.jpg','images/1-5R.jpg','images/1-7R.jpg','images/1-9R.jpg','images/1-11R.jpg','images/5-1_02-r.jpg','images/5-2_02-r.jpg','images/5-3_02-r.jpg')">
<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" bgcolor="#D0EBFF"><table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <?
		echo file_get_contents('menulink.html');
		?>
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
    <!-- InstanceBeginEditable name="content" --><center> <font size="+6"> Pay Omise Completed </font> </center>
	
	<?php 
	
		$id	=	$_GET["id"];
		
		if($id==""){
			
		go('index.php');	
		
		}
		//## update confirm payment status reservation
		$sql = "update reservation
				set reserv_status = 2
				where reserv_id = '$id'
				";
		$conn->query($sql);
		
		//## send mail  : payment omise has complete ## 
		SendMail("",$id,$conn,$conn2,2);
		
		header("refresh:5; url=index.php");
	?>
	
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
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush() ?>