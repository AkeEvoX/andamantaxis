<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Check Rates Transfers from Phuket | Airport Transfers</title>
        <meta name="keywords" content="Phuket Airport, airport transfers,resort transfers,airport taxis, low cost transfers" />
		<meta name="description" content="Check rates and Book your Phuket Airport transfers today with AndamanTaxis.com. Choose from shuttles, taxis and more." />
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
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
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
<body onmousedown='return false' oncontextmenu='return false' onselectstart='return false'>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <?php include 'top-header.php';?>
                                                       
 <li><a href="https://andamantaxis.com/best-destinations.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/best-destinations-th.php"><img src="/images/th.png" border="0">TH</a></li>

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
              
			<h1>Transfers from Phuket</h1>
 <div class="table-responsive">
<br>
<table cellspacing="0" cellpadding="0">
  <col>
  <col>
  <col>
 <col>
  <col>
  <col>
  <col>
 
 <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Phuket International Airport (HKT)</td>
    <td>Naiyang Beach ,    Phuket</td>
    <td>20</td>
    <td>700</td>
    <td>900</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="62">&nbsp;</td>
    <td>Naithon Beach ,    Phuket</td>
    <td>20</td>
    <td>800</td>
    <td>1000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Sai Kaeo Beach ,    Phuket</td>
    <td>25</td>
    <td>900</td>
    <td>1100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>JM Marriott , Phuket</td>
    <td>25</td>
    <td>900</td>
    <td>1100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laguna Beach ,    Phuket</td>
    <td>45</td>
    <td>950</td>
    <td>1100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phuket Town , Phuket</td>
    <td>60</td>
    <td>1000</td>
    <td>1200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Yacht Boat Lagoon ,    Phuket</td>
    <td>60</td>
    <td>1000</td>
    <td>1400</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Yacht Royal Marina ,    Phuket</td>
    <td>60</td>
    <td>1000</td>
    <td>1400</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="407">Surin    Beach , Phuket</td>
    <td>80</td>
    <td>1000</td>
    <td>1200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="407">Kamala    Beach , Phuket</td>
    <td>80</td>
    <td>1000</td>
    <td>1200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="407">Bangtao    Beach , Phuket</td>
    <td>80</td>
    <td>1000</td>
    <td>1200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="407">Phuket    Town , Phuket</td>
    <td>80</td>
    <td>1000</td>
    <td>1200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="407">Patong    Beach , Phuket</td>
    <td>80</td>
    <td>1000</td>
    <td>1200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Leamsai Beach / Ao    Po Pier , Phuket</td>
    <td>60</td>
    <td>1000</td>
    <td>1400</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phuket Fishery Pier    , Phuket</td>
    <td>60</td>
    <td>1050</td>
    <td>1400</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Cape Panwa , Phuket</td>
    <td>90</td>
    <td>1100</td>
    <td>1300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Khat , Phuket</td>
    <td>90</td>
    <td>1100</td>
    <td>1300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kata - Karon Beach ,    Phuket</td>
    <td>90</td>
    <td>1100</td>
    <td>1300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Rawai Beach , Phuket</td>
    <td>90</td>
    <td>1200</td>
    <td>1300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Yanui Beach , Phuket</td>
    <td>90</td>
    <td>1200</td>
    <td>1300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Naiya Beach , Phuket</td>
    <td>90</td>
    <td>1200</td>
    <td>1300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Naiharn Beach ,    Phuket</td>
    <td>90</td>
    <td>1300</td>
    <td>1900</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>90</td>
    <td>1700</td>
    <td>2000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nang thong beach ,    Phang Nga</td>
    <td>90</td>
    <td>1700</td>
    <td>2000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang niang beach ,    Phang Nga</td>
    <td>90</td>
    <td>1700</td>
    <td>2000</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>110</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>110</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>110</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>150</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong Town </td>
    <td>270</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>270</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Airport</td>
    <td>210</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>210</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station , Suratthani</td>
    <td>210</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District    ,Suratthani</td>
    <td>270</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>150</td>
    <td>3000</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha    Dam  ,Suratthani</td>
    <td>150</td>
    <td>3000</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier  ,Suratthani</td>
    <td>240</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong jilad pier (    go to phi phi ) , Krabi</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang any    Hotel  , Krabi</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nammao Pier (    Railay Pier )  , Krabi</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had    Nopparathara  , Krabi</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>120</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao / Laem    Kruat  , Krabi</td>
    <td>170</td>
    <td>3200</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thalene Pier , Krabi</td>
    <td>150</td>
    <td>2600</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>270</td>
    <td>4500</td>
    <td>4800</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town / Trang    Airport</td>
    <td>270</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier /    Anantara sikao , Trang</td>
    <td>270</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier /    Chao Mai Beach , Trang</td>
    <td>270</td>
    <td>5000</td>
    <td>5200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier ( go to    Koh Lipe ) , Satun</td>
    <td>390</td>
    <td>7000</td>
    <td>7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>390</td>
    <td>7000</td>
    <td>7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>1.5 HRS</td>
    <td>1700</td>
    <td>2000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>1.75 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>1.75 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>1.75 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>2.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>3.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>3.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Naiyang Beach    , Phuket</td>
    <td>Surat Thani Railway    Station</td>
    <td>3.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="39">&nbsp;</td>
    <td>Khanom District ,    Suratthani </td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>2.5 HRS</td>
    <td>3000</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3 HRS</td>
    <td>4000</td>
    <td>4500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>2 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>2 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong jilad pier ,    Krabi</td>
    <td>2 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>2.75 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>2.75 HRS</td>
    <td>3200</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>2.75 HRS</td>
    <td>3200</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>2.75 HRS</td>
    <td>2600</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>4.5 HRS</td>
    <td>4500</td>
    <td>4800</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.25 HRS</td>
    <td>7000</td>
    <td>7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.25 HRS</td>
    <td>7000</td>
    <td>7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>1.5 HRS</td>
    <td>1700</td>
    <td>2000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>1.75 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>1.75 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>1.75 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>2.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>3.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>3.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>3.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>2.5 HRS</td>
    <td>3000</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3 HRS</td>
    <td>4000</td>
    <td>4500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>2 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Mai Khao    Beach , Phuket</td>
    <td>Krabi Town , Krabi</td>
    <td>2 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="30">&nbsp;</td>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>2 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kloang Muang Beach ,    Krabi</td>
    <td>2.75 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>2.75 HRS</td>
    <td>3200</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>2.75 HRS</td>
    <td>3200</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>2.75 HRS</td>
    <td>2600</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>4.5 HRS</td>
    <td>4500</td>
    <td>4800</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.25 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>4.5 HRS</td>
    <td>5000</td>
    <td>5200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.25 HRS</td>
    <td>7000</td>
    <td>7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.25 HRS</td>
    <td>7000</td>
    <td>7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>4 HRS</td>
    <td>3500</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5.5 HRS</td>
    <td>6500</td>
    <td>7000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Cape Panwa ,    Phuket</td>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>4 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="36">&nbsp;</td>
    <td>Don Sak Pier,    Suratthani</td>
    <td>5 HRS</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>klong jilad pier ,    Krabi</td>
    <td>3  HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.75 HRS</td>
    <td>3000</td>
    <td>3200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.75 HRS</td>
    <td>3100</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>6 HRS</td>
    <td>5200</td>
    <td>5500</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>4 HRS</td>
    <td>3500</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5.5 HRS</td>
    <td>6500</td>
    <td>7000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>4 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>5 HRS</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Kata - Karon    Beach , Phuket</td>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="29">&nbsp;</td>
    <td>klong jilad pier ,    Krabi</td>
    <td>3  HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.75 HRS</td>
    <td>3000</td>
    <td>3200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.75 HRS</td>
    <td>3100</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>6 HRS</td>
    <td>5200</td>
    <td>5500</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>4 HRS</td>
    <td>3500</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5.5 HRS</td>
    <td>6500</td>
    <td>7000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Nai Harn    Beach , Phuket</td>
    <td>Khao Sok ,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="37">&nbsp;</td>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>4 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>5 HRS</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>klong jilad pier ,    Krabi</td>
    <td>3  HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.75 HRS</td>
    <td>3000</td>
    <td>3200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.75 HRS</td>
    <td>3100</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>6 HRS</td>
    <td>5200</td>
    <td>5500</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5 HRS</td>
    <td>6300</td>
    <td>6800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3600</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>4300</td>
    <td>4800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4.5 HRS</td>
    <td>5800</td>
    <td>6300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Patong Beach    , Phuket</td>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="30">&nbsp;</td>
    <td>Klong jilad pier ,    Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2800</td>
    <td>3000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.5 HRS</td>
    <td>2900</td>
    <td>3100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>5 HRS</td>
    <td>4800</td>
    <td>5100</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2.75 HRS</td>
    <td>2400</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>4 HRS</td>
    <td>3500</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4.5 HRS</td>
    <td>6000</td>
    <td>6200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5.5 HRS</td>
    <td>6500</td>
    <td>7000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Rawai Beach ,    Phuket</td>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>4 HRS</td>
    <td>4500</td>
    <td>5000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="34">&nbsp;</td>
    <td>Don Sak Pier,    Suratthani</td>
    <td>5 HRS</td>
    <td>6000</td>
    <td>6500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3  HRS</td>
    <td>2500</td>
    <td>2700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>3000</td>
    <td>3500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kloang Muang Beach ,    Krabi</td>
    <td>3.75 HRS</td>
    <td>3000</td>
    <td>3200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.75 HRS</td>
    <td>3700</td>
    <td>4000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.75 HRS</td>
    <td>3100</td>
    <td>3300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>6 HRS</td>
    <td>5200</td>
    <td>5500</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>5.25 HRS</td>
    <td>5000</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5.5 HRS</td>
    <td>5500</td>
    <td>5700</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>7.25 HRS</td>
    <td>7500</td>
    <td>8000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5 HRS</td>
    <td>6300</td>
    <td>6800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3600</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>4300</td>
    <td>4800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Phuket Town</td>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4.5 HRS</td>
    <td>5800</td>
    <td>6300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="34">&nbsp;</td>
    <td>Krabi Airport</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>klong jilad pier ,    Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2800</td>
    <td>3000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.5 HRS</td>
    <td>2900</td>
    <td>3100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>5 HRS</td>
    <td>4800</td>
    <td>5100</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5 HRS</td>
    <td>6300</td>
    <td>6800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3600</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>4300</td>
    <td>4800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4.5 HRS</td>
    <td>5800</td>
    <td>6300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Surin Beach ,    Phuket</td>
    <td>Krabi Airport</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="32">&nbsp;</td>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong jilad pier ,    Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2800</td>
    <td>3000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.5 HRS</td>
    <td>2900</td>
    <td>3100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>5 HRS</td>
    <td>4800</td>
    <td>5100</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khanom District ,    Suratthani </td>
    <td>5 HRS</td>
    <td>6300</td>
    <td>6800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao Sok ,    Suratthani</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3600</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>4300</td>
    <td>4800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Kamala Beach    , Phuket</td>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4.5 HRS</td>
    <td>5800</td>
    <td>6300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="30">&nbsp;</td>
    <td>Krabi Airport</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>klong jilad pier ,    Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2800</td>
    <td>3000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.5 HRS</td>
    <td>2900</td>
    <td>3100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>5 HRS</td>
    <td>4800</td>
    <td>5100</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khao lak any Hotel ,    Phang Nga</td>
    <td>2.5 HRS</td>
    <td>1900</td>
    <td>2200</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bang Sak Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thaptawan Beach ,    Phang Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Namkem Pier , Phang    Nga</td>
    <td>2 HRS</td>
    <td>2200</td>
    <td>2500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Khura Buri , Phang    Nga</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong any hotel</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ranong airport</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani    Airport </td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Suratthani Town</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Surat Thani Railway    Station</td>
    <td>4 HRS</td>
    <td>5800</td>
    <td>6000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">FROM</td>
    <td bgcolor="#CCCCCC">TO</td>
    <td bgcolor="#CCCCCC">Times</td>
    <td bgcolor="#CCCCCC">Car</td>
    <td bgcolor="#CCCCCC">Van</td>
    <td bgcolor="#CCCCCC">Remark</td>
  </tr>
  <tr>
    <td>Bangtao ,    Phuket</td>
    <td>Khanom District ,    Suratthani </td>
    <td>5 HRS</td>
    <td>6300</td>
    <td>6800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="22">&nbsp;</td>
    <td>Khao Sok ,    Suratthani</td>
    <td>3 HRS</td>
    <td>3300</td>
    <td>3600</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ratchaprapha Dam,    Suratthani</td>
    <td>3.5 HRS</td>
    <td>4300</td>
    <td>4800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Don Sak Pier,    Suratthani</td>
    <td>4.5 HRS</td>
    <td>5800</td>
    <td>6300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Airport</td>
    <td>2.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Krabi Town , Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Klong Muang Beach ,    Krabi</td>
    <td>3 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nang , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ao Nam mao Pier ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nopparat Thara pier    , Krabi</td>
    <td>3.5 HRS</td>
    <td>2500</td>
    <td>2800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kloang Muang Beach ,    Krabi</td>
    <td>3.5 HRS</td>
    <td>2800</td>
    <td>3000</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Had Yao , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Laem Kruat , Krabi</td>
    <td>3.5 HRS</td>
    <td>3500</td>
    <td>3800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Thanene Pier , Krabi</td>
    <td>3.5 HRS</td>
    <td>2900</td>
    <td>3100</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Koh Lanta Any Hotel    , Krabi</td>
    <td>5 HRS</td>
    <td>4800</td>
    <td>5100</td>
    <td>Include Ferries</td>
  </tr>
  <tr>
    <td>Trang Town</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Trang Airport</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakmeng Pier , Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Anantara sikao ,    Trang</td>
    <td>4.75 HRS</td>
    <td>4800</td>
    <td>5300</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kuan Tung Ku Pier ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Chao Mai Beach ,    Trang</td>
    <td>5 HRS</td>
    <td>5300</td>
    <td>5500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pakbara Pier , Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tammalang Pier ,    Satun</td>
    <td>6.75 HRS</td>
    <td>7300</td>
    <td>7800</td>
    <td>&nbsp;</td>
  </tr>
</table>
     </div><br>                      <a href="/"><img src="/images/booknow.jpg" border="0" class="img-responsive center-block"></a>
    
<br>
<div class="alert alert-danger"> <strong>Expiration: 31 October 2018. </strong><br>
All prices are subject to change without notice.!</div>
         
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