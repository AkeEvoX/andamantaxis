<?php ob_start(); 
		
?>
<?php require_once('include/connect.php'); ?>
<?php require_once('include/function.php'); 
//print_r($_POST);
//		print_r($_SESSION);
//		print_r($route_data);exit;	
?>
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

<!-- InstanceEndEditable -->
</head>

<body onload="MM_preloadImages('images/3-3R.jpg','images/3-4R.jpg','images/1-5R.jpg','images/1-7R.jpg','images/1-9R.jpg','images/1-11R.jpg','images/5-1_02-r.jpg','images/5-2_02-r.jpg','images/5-3_02-r.jpg','images/bEditleg-r.png','images/bDelete2-r.png','images/bAddLeg-r.png','images/bSubmit-r.png')">
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
		<script>
		console.log('<? echo var_dump($_SESSION["s_route"]);  ?>');
		</script>
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
	
<form id="form1" name="form1" method="post" action="">
    <?php
		
		if ($_POST){	
			$vtype_id		=	$_POST["vtype"];
			$total1		  =	$_POST["total1"];
			$total2		  =	$_POST["total2"];
			$unit			=	$_POST["unit"];
			$num_route	   =	$_POST["num_route"];
			
			array_push($_SESSION["s_route"][$num_route],$vtype_id,$total1,$unit,$total2);	
			
		}
	/*
		echo "<pre>";
		print_r($_SESSION["s_route"]);
		echo "</pre>";
		exit();
		*/
		$route_data = $_SESSION["s_route"];

 	
	if ($route_data == array())
		exit("<script>window.location='index.php';</script>");
		
		
	foreach ($route_data as $index=>$val){
			
	?>
      <table width="619" border="0" align="center" cellpadding="0" cellspacing="0" class="s11" >
        <tr>
          <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="8%">&nbsp;</td>
                <td><h1>Book Your Transfer </h1></td>
                <td width="23%"><a href="booking.php?num_route=<?php echo $index ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image50','','images/bEditleg-r.png',1)"><img src="images/bEditleg.png" alt="" name="Image50" width="117" height="34" id="Image50" /></a></td>
                <td width="2%"></td>
                </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            </table></td>
          </tr>
        <tr>
          <td width="50" valign="top">&nbsp;</td>
          <td width="197" valign="top"><strong style="font-size:22px">1.Where </strong></td>
          <td colspan="4" valign="top"><em>Origin :</em> <?php echo showprovince($val[0])?>  / <?php echo showlocation($val[1]) ?><br/>
            <em>Destination :</em> <?php echo showprovince($val[2])?> / <?php echo showlocation($val[3]) ?><br />            
            <em>Amount :</em> 
			<?php 
			if ($_SESSION["s_mem_id"]!="")
			{
				  echo number_format($val[17] * $val[16] , 2);
			}
			else 
			{
				  echo number_format($val[15] * $val[16] , 2); 
			}
			?> 
            <em>baht&nbsp;&nbsp;</em><em>By :</em> <?php echo showvehicle($val[14]) ?><br />            </td>
          </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top"><strong style="font-size:22px">2.When</strong></td>
          <td colspan="4" valign="top"><em>Arrival date :</em> <?php echo changeDateMonthShow($val[4]) ?> <br />
            <em>Arrival time :</em> <?php echo $val[5] ?>:<?php echo str_pad($val[6],2,"0",STR_PAD_LEFT); ?><br />
           <?php if ($val[7]!=""){ ?>
            <em>Departure date :</em> <?php echo changeDateMonthShow($val[7]) ?> <br />
            <em>Departure time :</em> <?php echo $val[8] ?>:<?php echo str_pad($val[9],2,"0",STR_PAD_LEFT); ?>
           <?php } ?>
            </td>
          </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top"><strong style="font-size:22px">3.Who</strong></td>
          <td colspan="4" valign="top"><span class="b1"><em>Adults (12+) :</em></span>&nbsp;<?php echo $val[10] ?><br />
            <span class="b1"><em>Children (3-11) :</em></span>&nbsp;<?php echo $val[11] ?><br />
            <span class="b1"><em>Infants (0-2) :</em></span>&nbsp;<?php echo $val[12] ?></td>
          </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td width="334" align="right"><a href="del_booking.php?num_route=<?php echo $index ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image45','','images/bDelete2-r.png',1)"><img src="images/bDelete2.png" alt="andamantaxis" name="Image45" width="118" height="34" id="Image45" /></a></td>
          <td width="38" colspan="3" align="right">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td colspan="3" align="right">&nbsp;</td>
        </tr>
        </table>
      <br />
    
<table width="279" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="279"><?php } ?>
      <a href="booking.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image51','','images/bAddLeg-r.png',1)"><img src="images/bAddLeg.png" alt="Andamantaxis" name="Image51" width="117" height="33" id="Image51" /></a><a href="booking-detail.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image52','','images/bSubmit-r.png',1)">&nbsp;<img src="images/bSubmit.png" alt="Andamantaxis" name="Image52" width="117" height="33" id="Image52" /></a><a href="booking.php?num_route=<?php echo $index ?>"></a></td>
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