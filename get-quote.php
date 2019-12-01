<?php ob_start(); ?>
<?php require_once('include/connect.php'); ?>
<?php require_once('include/function.php'); ?>
<?php require_once('link.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Airport Transfers and Taxi Services | AndamanTaxis</title>
       
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
    <link rel="stylesheet" type="text/css" href="css/booking.css"/>
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
  border:2px
  margin:20px; padding:20px;
}

div.ch1 {
  background-color: white;
  color: black;
  border:2px

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
                                                       
 <li><a href="https://andamantaxis.com/package.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/package-th.php"><img src="/images/th.png" border="0">TH</a></li>

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
													"transfer"=>$_POST["transfer"]
													);
													
													
	
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

?>    
    
<h2>Step 1 : Select Your Vehicle Type</h2>

      <?php 
	  
	  //$vehicle_type
	  
	  /*
	  	$sql = "select vehicle_type.*,travel_price.*,travel_route.*,loc.location_type from vehicle_type
				inner join travel_price ON vehicle_type.vtype_id = travel_price.vtype_id 
				inner join travel_route ON travel_route.troute_id = travel_price.troute_id 
				left join travel_location loc ON $location1 = loc.tlocation_id
				where vtype_status = 1 
				and tprice_bound = '$transfer' 
	and ((travel_route.tlocation_id_origin = '$location1' and travel_route.tlocation_id_destination = '$location2')
	 or (travel_route.tlocation_id_origin = '$location2' and travel_route.tlocation_id_destination = '$location1'))
				"; */
				
		$sql = "select vehicle_type.*,travel_price.*,travel_route.* 
				,(select count(0) from travel_location loc where loc.location_type=1 and loc.tlocation_id in ('$location1','$location2')) as isflight
				from vehicle_type
				inner join travel_price ON vehicle_type.vtype_id = travel_price.vtype_id 
				inner join travel_route ON travel_route.troute_id = travel_price.troute_id 
				where vtype_status = 1 
				and tprice_bound = '$transfer' 
	and ((travel_route.tlocation_id_origin = '$location1' and travel_route.tlocation_id_destination = '$location2' )
	 )
				"; 
				
		
		if(isset($_GET["vehicle_search"]) && $_GET["vehicle_search"] != "")
		{
			$sql .= " and vehicle_type.vtype_id = " .$_GET["vehicle_search"];
		}
				
		$sql .= " order by vehicle_type.vtype_id ";
		
		//echo $sql."<br/>";
				
		$conn->query($sql);
		for ($i=1; $i<=$conn->numRow(); $i++){
			
			$row = $conn->fetchArray();
			
			/* initial meta vehicle */
			$peolpe = $adults+$children+$infants;
			$car	=	ceil(($peolpe)/$row["seat"]);
			
		    $total1 = ($row["tprice_amount"] * $car)  * $row["tprice_bound"];
		  	$total2 = ($row["tprice_amount_agent"] * $car ) * $row["tprice_bound"] ;
			
			$temp_booking["vehicle_type"] = $row["vtype_id"];
			$temp_booking["price"] = $total1 ; //
			$temp_booking["price_agent"] = $total2; // $row["tprice_bound"]
			$temp_booking["isflight"] = $row["isflight"];
			$temp_booking["routeid"]  = $row["troute_id"];
			
			//$temp_booking["vehicle_search"] = $row["vtype_id"];
			//num_route=<? echo $temp_booking["routeid"]; ? > &
	  ?>
      <form name="form2" method="post" action="booking-success.php?isflight=<? echo $row["isflight"]; ?>" >
	  <input type='hidden' name='databooking' value='<? echo base64_encode(serialize($temp_booking)); ?>' />
	  
	  
      <input type="hidden" class="seat_unit"  data-direction="<?php echo $i ?>" value="<?php echo $row["seat"] ?>" />
      <input type="hidden" class="price_unit"  data-direction="<?php echo $i ?>" value="<?php echo $row["tprice_amount"]; ?>" />
      <input type="hidden" class="price_unit_agent"  data-direction="<?php echo $i ?>" value="<?php echo $row["tprice_amount_agent"]; ?>" />
      <input type="hidden" class="person"  data-direction="<?php echo $i ?>" value="<?php echo $children+$adults+$infants ?>" />
      <?php 
	  echo  "Travel $adults Adult $children Children $infants Infants";

	  ?>
      Total : <?php echo $children+$adults+$infants ?> Pax
      <table border="0" align="center" cellpadding="7" cellspacing="8" class="t-s2">
        <tr>
          <td ><img src="<?php echo $row["vtype_image"] ?>" width="130" height="48" class="img-responsive"/></td>
          <td align="center"><img src="images/icon_times.png" width="32" height="54" class="img-responsive"/></td>
          <td align="center">
          <select name="unit" class="s2" data-direction="<?php echo $i ?>">
           <?php 
		   //// cal จำนวนคันรถ////////
		   
		   for ($c=$car; $c<=99; $c++){ ?>
            <option value="<?php echo $c ?>"><?php echo $c?></option>
            <?php } ?>
          </select></td>
		  
          <td width="32" align="center"><img src="images/icon_equ.png" width="32" height="54" class="img-responsive"/></td>
          <td width="41" align="center"><img src="images/suitcase.png" width="41" height="37"class="img-responsive" /></td>
          <td width="32" align="center"><img src="images/icon_plus.png" width="32" height="54" class="img-responsive"/></td>
          <td width="37" align="center"><img src="images/sym.png" width="37" height="48"class="img-responsive" /></td>
          <td width="32" align="center"><img src="images/icon_plus.png" width="32" height="54"class="img-responsive" /></td>
          <td width="46" align="center"><img src="images/clock.png" width="46" height="55"class="img-responsive" /></td>
          <td width="191" align="right"><span class="showprice" data-direction="<?php echo $i ?>"><?php //คำนวนราคารถ////////
		  
	  if ($_SESSION["s_mem_id"]!="")
		   echo number_format($total2,2); //price member
	  else
		   echo number_format($total1,2);
	  		 ?></span> Baht
           
           </td>
          <td width="174" rowspan="2" align="center">
            <!-- <input name="vtype" type="hidden" id="vtype" value="<?php //echo $row["vtype_id"] ?>" />-->
            <input name="total1" type="hidden" id="total1" value="<?php echo $total1 ?>" />
            <input name="total2" type="hidden" id="total2" value="<?php echo $total2 ?>" />
            <input name="num_route" type="hidden" id="num_route" value="<?php echo $num_route ?>" />
            <input type="image" name="imageField" id="imageField" src="images/btn-booking.png" class="img-responsive" />
          </td>
        </tr>
        <tr>
          <td align="center" class="s2"> <?php echo $row["vtype_name"] ?></td>
          <td>&nbsp;</td>
          <td align="center" class="s2">No. of Vehicles </td>
          <td>&nbsp;</td>
          <td align="center"><span class="showseat" data-direction="<?php echo $i ?>"><?php echo $row["seat"]?></span></td>
          <td>&nbsp;</td>
          <td align="center"><?php echo "1-".$row ["seat"] ?>&nbsp; Pax</td>
          <td>&nbsp;</td>
          <td align="center"><?php echo $row["troute_interval"] ?> Minutes</td>
          <td align="right"><span class="showpriceperson" data-direction="<?php echo $i ?>"><?php 
		  if ($_SESSION["s_mem_id"]!="")
		  	echo number_format (round ($total2/($peolpe),2),2);
		  else
		  	echo number_format (round ($total1/($peolpe),2),2);
			
		   ?>
          </span> Baht per Person</td>
        </tr>
      </table>
      </form> 
 
      <?php } ?>
      <br><br>
  <div class="alert alert-info"> <strong>    
  <i class="fa fa-info-circle" aria-hidden="true"></i>

 Car:  Maximum of 3 passengers - Luggage Size Large x2 Small Luggage x1   <br>
<i class="fa fa-info-circle" aria-hidden="true"></i>

   Van:  Maximum of 9 passengers - Luggage Size Large x9 Small Luggage x2   <br>
 <i class="fa fa-info-circle" aria-hidden="true"></i>

   Luggage Size: Large Luggage 78cm x 50cm x 36cm Small Luggage55 cm x 40 cm x 20 cm </strong></div>
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