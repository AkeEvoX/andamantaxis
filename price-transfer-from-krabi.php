<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>Check Rates Transfers from Krabi | Airport Transfers</title>
        <meta name="keywords" content="Krabi Airport, airport transfers,resort transfers,airport taxis, low cost transfers" />
		<meta name="description" content="Check rates and Book your Krabi Airport (KBV) transfers today with AndamanTaxis.com. Choose from shuttles, taxis and more." />
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
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
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
              
			<h1>Transfers from Krabi</h1>
 <div class="table-responsive"> 
<table border="1" cellpadding="0" cellspacing="0" class="table">
                             <col>
                             <col>
                             <col>
                              <col>
                              <col>
                             <col span="3">
                             <col>
                             <tr>
                               <td colspan="9" bgcolor="#CCCCCC"><strong>Expiration: 31 October 2018. </strong></td>
                             </tr>
                             <tr>
                               <td colspan="4" >From</td>
                               <td>To</td>
                               <td>Time/Min</td>
                               <td >Selling - Car</td>
                               <td >Selling -Van</td>
                               <td>Comment</td>
                             </tr>
                             <tr>
                               <td colspan="4" rowspan="29"><strong>Krabi Airport KBV</strong></td>
                               <td>Krabi Town / Klong    jilad pier ( go to phi phi )</td>
                               <td>25</td>
                               <td>600</td>
                               <td>650</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Ao Nang / Ao Nammao    Pier ( Railay Pier ) / Had Nopparathara</td>
                               <td>35</td>
                               <td>700</td>
                               <td>900</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Kloang Muang Beach</td>
                               <td>40</td>
                               <td>900</td>
                               <td>1100</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Had Yao / Laem Kruat</td>
                               <td>35</td>
                               <td>900</td>
                               <td>1000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Thanene Pier</td>
                               <td>45</td>
                               <td>900</td>
                               <td>1200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Tub Kaak Beach</td>
                               <td>50</td>
                               <td>1200</td>
                               <td>1400</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pimalai Pier (Hua    Hin)</td>
                               <td>60</td>
                               <td>1500</td>
                               <td>1800</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Koh Lanta (Klong Dao    / Sala Dan / Long Beach / Klong Khong)</td>
                               <td>120</td>
                               <td>2500</td>
                               <td>2800</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Koh Lanta ( Kantiang    Beach (Pimalai, The Houben , Etc.)</td>
                               <td>150</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Trang Town / Trang    Airport</td>
                               <td>150</td>
                               <td>2500</td>
                               <td>2800</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pakmeng Pier /    Anantara sikao</td>
                               <td>120</td>
                               <td>2500</td>
                               <td>2800</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Kuan Tung Ku Pier /    Chao Mai Beach</td>
                               <td>150</td>
                               <td>2700</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Koh Sukon</td>
                               <td>180</td>
                               <td>3000</td>
                               <td>3200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Surattani Town /    Surattani Airport / Surat Thani Railway Station</td>
                               <td>150</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Khanom District</td>
                               <td>210</td>
                               <td>4000</td>
                               <td>4200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Khao Sok  /     Ratchaprapha Dam</td>
                               <td>120</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Don Sak Pier</td>
                               <td>180</td>
                               <td>3800</td>
                               <td>4000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Phang Nga Town</td>
                               <td>105</td>
                               <td>2300</td>
                               <td>2400</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>khao lak</td>
                               <td>150</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Nam Ken Pier </td>
                               <td>180</td>
                               <td>3000</td>
                               <td>3200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Bang Sak Beach</td>
                               <td>180</td>
                               <td>3000</td>
                               <td>3200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pakbara Pier ( go to    Koh Lipe )</td>
                               <td>240</td>
                               <td>4600</td>
                               <td>5000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Tammalang Pier</td>
                               <td>300</td>
                               <td>5200</td>
                               <td>6000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Phuket Airport /    Naiyang Beach / Mai Khao Beach / Ao Por</td>
                               <td>120</td>
                               <td>2500</td>
                               <td>2700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Cape Panwa / Nai Ham    area / Patong Beach / Kata / Karon</td>
                               <td>210</td>
                               <td>3000</td>
                               <td>3500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Surin    Beach / Kamala Beach / Bangtao</td>
                               <td>180</td>
                               <td>2500</td>
                               <td>2800</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Hadyai </td>
                               <td>240</td>
                               <td>4600</td>
                               <td>5000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Huahin</td>
                               <td>480</td>
                               <td>10000</td>
                               <td>12000</td>
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
                               <td colspan="9" bgcolor="#CCCCCC">&nbsp;</td>
                             </tr>
                             <tr>
                               <td colspan="4">From</td>
                               <td>To</td>
                               <td>Time/Min</td>
                               <td>Selling - Car</td>
                               <td>Selling - Van</td>
                               <td>Comment</td>
                             </tr>
                             <tr>
                               <td colspan="4" rowspan="29"><strong>Krabi    Town </strong></td>
                               <td>Krabi Airport</td>
                               <td>25</td>
                               <td>600</td>
                               <td>650</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Ao Nang / Ao Nammao    Pier ( Railay Pier ) / Had Nopparathara</td>
                               <td>35</td>
                               <td>600</td>
                               <td>700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>

                               <td>Kloang Muang Beach</td>
                               <td>40</td>
                               <td>800</td>
                               <td>1000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Thanene Pier</td>
                               <td>45</td>
                               <td>800</td>
                               <td>1100</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Tub Kaak Beach</td>
                               <td>50</td>
                               <td>1100</td>
                               <td>1300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Had Yao / Laem Kruat</td>
                               <td>35</td>
                               <td>1100</td>
                               <td>1200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pimalai Pier (Hua    Hin)</td>
                               <td>60</td>
                               <td>1700</td>
                               <td>2000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Koh Lanta (Klong Dao    / Sala Dan / Long Beach / Klong Khong)</td>
                               <td>120</td>
                               <td>2700</td>
                               <td>3000</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Koh Lanta ( Kantiang    Beach (Pimalai, The Houben , Etc.)</td>
                               <td>150</td>
                               <td>3000</td>
                               <td>3200</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Trang Town / Trang    Airport</td>
                               <td>150</td>
                               <td>2700</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pakmeng Pier /    Anantara sikao</td>
                               <td>120</td>
                               <td>2700</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Kuan Tung Ku Pier /    Chao Mai Beach</td>
                               <td>150</td>
                               <td>2900</td>
                               <td>3200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Koh Sukon</td>
                               <td>180</td>
                               <td>3200</td>
                               <td>3400</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Surattani Town /    Surattani Airport / Surat Thani Railway Station</td>
                               <td>150</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Khanom District</td>
                               <td>210</td>
                               <td>4000</td>
                               <td>4200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Khao Sok  /     Ratchaprapha Dam</td>
                               <td>120</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Don Sak Pier</td>
                               <td>180</td>
                               <td>3800</td>
                               <td>4000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Phang Nga Town</td>
                               <td>105</td>
                               <td>2300</td>
                               <td>2400</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>khao lak</td>
                               <td>150</td>
                               <td>2800</td>
                               <td>3000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Nam Ken Pier </td>
                               <td>180</td>
                               <td>3000</td>
                               <td>3200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Bang Sak Beach</td>
                               <td>180</td>
                               <td>3000</td>
                               <td>3200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pakbara Pier ( go to    Koh Lipe )</td>
                               <td>240</td>
                               <td>4600</td>
                               <td>5000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Tammalang Pier</td>
                               <td>300</td>
                               <td>5200</td>
                               <td>6000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Phuket Airport /    Naiyang Beach / Mai Khao Beach / Ao Por</td>
                               <td>120</td>
                               <td>2500</td>
                               <td>2700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Cape Panwa / Nai Ham    area / Patong Beach / Kata / Karon</td>
                               <td>210</td>
                               <td>3000</td>
                               <td>3500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td >Surin    Beach / Kamala Beach / Bangtao / Phuket Town</td>
                               <td>180</td>
                               <td>2500</td>
                               <td>2800</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Hadyai </td>
                               <td>240</td>
                               <td>4600</td>
                               <td>5000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Huahin</td>
                               <td>480</td>
                               <td>10000</td>
                               <td>12000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>&nbsp;</td>
                               <td>&nbsp;</td>
                               <td>&nbsp;</td>
                               <td>&nbsp;</td>
                               <td></td>
                             </tr>
                             <tr>
                               <td colspan="9" bgcolor="#CCCCCC">&nbsp;</td>
                             </tr>
                             <tr>
                               <td colspan="4">From</td>
                               <td>To</td>
                               <td>Time/Min</td>
                               <td>Selling - Car</td>
                               <td>Selling - Van</td>
                               <td>Comment</td>
                             </tr>
                             <tr>
                               <td colspan="4" rowspan="28"><strong>Ao Nang / Ao Nammao Pier /Railay Pier/ Had Nopparathara</strong></td>
                               <td>Krabi Airport</td>
                               <td>35</td>
                               <td>700</td>
                               <td>900</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Krabi Town / Klong    jilad pier ( go to phi phi )</td>
                               <td>25</td>
                               <td>600</td>
                               <td>700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Kloang Muang Beach</td>
                               <td>40</td>
                               <td>700</td>
                               <td>900</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Thanene Pier</td>
                               <td>45</td>
                               <td>700</td>
                               <td>1000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Tub Kaak Beach</td>
                               <td>50</td>
                               <td>1000</td>
                               <td>1200</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Had Yao / Laem Kruat</td>
                               <td>65</td>
                               <td>1400</td>
                               <td>1500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pimalai Pier (Hua    Hin)</td>
                               <td>90</td>
                               <td>2000</td>
                               <td>2300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Koh Lanta (Klong Dao    / Sala Dan / Long Beach / Klong Khong)</td>
                               <td>150</td>
                               <td>3000</td>
                               <td>3300</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Koh Lanta ( Kantiang    Beach (Pimalai, The Houben , Etc.)</td>
                               <td>180</td>
                               <td>3300</td>
                               <td>3500</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Trang Town / Trang    Airport</td>
                               <td>180</td>
                               <td>3000</td>
                               <td>3300</td>
                               <td>Include Ferries</td>
                             </tr>
                             <tr>
                               <td>Pakmeng Pier /    Anantara sikao</td>
                               <td>150</td>
                               <td>3000</td>
                               <td>3300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Kuan Tung Ku Pier /    Chao Mai Beach</td>
                               <td>180</td>
                               <td>3200</td>
                               <td>3500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Koh Sukon</td>
                               <td>210</td>
                               <td>3500</td>
                               <td>3700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Surattani Town /    Surattani Airport / Surat Thani Railway Station</td>
                               <td>150</td>
                               <td>3100</td>
                               <td>3300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Khanom District</td>
                               <td>210</td>
                               <td>4300</td>
                               <td>4500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Khao Sok  /     Ratchaprapha Dam</td>
                               <td>120</td>
                               <td>3100</td>
                               <td>3300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Don Sak Pier</td>
                               <td>180</td>
                               <td>4100</td>
                               <td>4300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Phang Nga Town</td>
                               <td>105</td>
                               <td>2600</td>
                               <td>2700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>khao lak</td>
                               <td>150</td>
                               <td>3100</td>
                               <td>3300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Nam Ken Pier </td>
                               <td>180</td>
                               <td>3300</td>
                               <td>3500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Bang Sak Beach</td>
                               <td>180</td>
                               <td>3300</td>
                               <td>3500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Pakbara Pier ( go to    Koh Lipe )</td>
                               <td>270</td>
                               <td>4900</td>
                               <td>5300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Tammalang Pier</td>
                               <td>330</td>
                               <td>5500</td>
                               <td>6300</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Phuket Airport /    Naiyang Beach / Mai Khao Beach / Ao Por</td>
                               <td>150</td>
                               <td>2500</td>
                               <td>2700</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Cape Panwa / Nai Ham    area / Patong Beach / Kata / Karon</td>
                               <td>240</td>
                               <td>3000</td>
                               <td>3500</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td >Surin    Beach / Kamala Beach / Bangtao / Phuket Town</td>
                               <td>210</td>
                               <td>2500</td>
                               <td>2800</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Hadyai </td>
                               <td>270</td>
                               <td>4600</td>
                               <td>5000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>Huahin</td>
                               <td>510</td>
                               <td>10000</td>
                               <td>12000</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                             </tr>
                             <tr>
                               <td colspan="9" bgcolor="#CCCCCC">REMARK    : Koh lanta  (Saladan ) Zone A = (Klong    Dao / Sala Dan / Long Beach / Klong Khong / Pra-Ae Beach)</td>
                             </tr>
                             <tr>
                               <td colspan="9" bgcolor="#CCCCCC">REMARK    : Koh lanta (Klongnin Beach) Zone B  =    ( Kantiang Beach (Pimalai, The Houben , Etc.)</td>
                             </tr>
                           </table> 
                           </div>
<br>
                           <a href="/"><img src="/images/booknow.jpg" border="0" class="img-responsive center-block"></a>
    
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