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
     <title>AndamanTaxis</title>
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
    
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui/js/jquery-ui.min.js"></script>
   
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
<?php 
	
/////////////////////////////////reservation////////////////////////	
//// 1. Recive data	
				$reserv_date		=	trim($_POST["reserv_date"]);
				$reserv_amount 		= 	str_replace(",","",$_POST["total"]); 
				$reserv_member		=	trim($_POST["reserv_member"]);
				$reserv_payment		=	trim($_POST["reserv_payment"]);
				$reserv_status		=	trim($_POST["reserv_status"]);///
				$reserv_firstname	=	trim($_POST["reserv_firstname"]);
				$reserv_lastname	=	trim($_POST["reserv_lastname"]);
				$reserv_email		=	trim($_POST["reserv_email"]);
				$reserv_mobile		=	trim($_POST["reserv_mobile"]);
				$reserv_detail		=	trim($_POST["reserv_detail"]);
				$reserv_address		=	trim($_POST["reserv_address"]);
				$reserv_zipcode		=	trim($_POST["reserv_zipcode"]);
				$flight = trim($_POST["reserv_flight"]);
				$flight_departure = trim($_POST["reserv_flight_departure"]);
				
				$hotel = trim($_POST["reserv_hotel"]);
				$hotel_dest = trim($_POST["reserv_hotel_dest"]);
				$reserv_status=1; // 1 is pending payment  , 2 is complete paypal or arrival driver
				if($reserv_payment==2) //1 is payment with arrival driver, 2 is payment with paypal
					$reserv_status=2;
				
//// 2. Save data to DB : Pass
//
		$sql	=	"insert into reservation 
				set reserv_date			=	now(),
					reserv_amount		=	'$reserv_amount',
					reserv_payment		=	'$reserv_payment',
					reserv_firstname	=	'$reserv_firstname',
					reserv_lastname		=	'$reserv_lastname',
					reserv_email		=	'$reserv_email',
					reserv_mobile		=	'$reserv_mobile',
					reserv_detail		=	'$reserv_detail',
					reserv_address		=	'$reserv_address',
					reserv_zipcode		=	'$reserv_zipcode' ,
					reserv_status = '$reserv_status',
					flight_arrival_number = '$flight',
					flight_departure_number = '$flight_departure',
					hotel_name = '$hotel',
					Hotel_name_destination = '$hotel_dest' ; ";
	
		//echo "sql=".$sql."";
		$result = $conn->query($sql);

		$reserv_id	=	$conn->insertId();
/////////////////////// reservation_detail//////////////////
		$grandtotal = 0;

		foreach ($_SESSION["s_route"] as $count=>$val){
				
				$route_data = $_SESSION["s_route"][$count];
				
					$province1 		= $route_data["province_src"];
					$location1 		= $route_data["location_src"];
					$province2 		= $route_data["province_dist"];
					$location2 		= $route_data["location_dist"];
					$date1	   		= $route_data["arrival_date"];
					$hour1	   		= $route_data["arrival_hour"];
					$min1	   		= $route_data["arrival_minute"];
					$date2 	   		= $route_data["departure_date"];
					$hour2 			= $route_data["departure_hour"];
					$min2 			= $route_data["departure_minute"];
					$adults 		= $route_data["adults"];
					$children		= $route_data["children"];
					$infants		= $route_data["infants"];
					$transfer		= $route_data["transfer"];
					$vtype_id		= $route_data["vehicle_type"];

					if ($_SESSION["s_mem_id"]!="")
						$total			= $route_data["price_agent"];
					else
						$total			= $route_data["price"];
					
					$unit			= $route_data["unit"];
					
					$savedate1 		= saveDate($date1,$hour1.":".$min1);
					$savedate2 		= saveDate($date2,$hour2.":".$min2);
					
					$grandtotal += $total;
					
				//// 2. Save data to DB

		$sql1	=	"insert into reservation_detail
				set rdetail_id 					= 	'".++$z."',
					reserv_id 					= 	'$reserv_id',
					rdetail_origin				=	'$location1',
					rdetail_destination			=	'$location2',
					rdetail_date_origin			=	'$savedate1',
					rdetail_date_destination	=	'$savedate2',
					rdetail_vehicle				=	'$vtype_id',
					rdetail_unit				=	'$unit',
					rdetail_bound				=	'$transfer',
					rdetail_adults_num			=	'$adults',
					rdetail_children_num		=	'$children',
					rdetail_infants_num			=	'$infants',
					rdetail_amount				=	'$total',
					rdetail_status				=	'1' ;";
					//echo $sql1;
					
			$result = $conn->query($sql1);
			
		}
		
			//clear session 
			$_SESSION["s_route"] = array();
			
			//## payment with paypal ##
			if ($reserv_payment == 2){
				
				//## send mail  : booking complete ## 
				SendMail($reserv_email,$reserv_id,$conn1,$conn2,0);			
				//## paypal ##			
			
				
				require('include/paypal.php'); 
							
				exit("<script>
					document.getElementById('frmpaypal').submit();
				</script>");
			}else{
				//#payment with Account
				confirmpayment($reserv_id,$conn1);
				
				alertgo("Thank You for Reservation.","index.php");

			}
			
?>	
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