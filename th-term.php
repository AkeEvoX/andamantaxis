<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>เงื่อนไขและข้อกำหนดในการใช้บริการ | อันดามันแท็กซี่</title>
        <meta name="keywords" content="อันดามันแท็กซี่, Krabi Transfer" />
		<meta name="description" content="อ่านข้อมูลเพิ่มเติมได้ในข้อกำหนดและเงื่อนไขเกี่ยวกับการเดินทางของเรา." />
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
                        <?php include 'th-top-header.php';?>
                                                       
 <li><a href="https://andamantaxis.com/term.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/term-th.php"><img src="/images/th.png" border="0">TH</a></li>

                            </ul>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
       
        <!-- /.main-header -->
  <?php include 'th-main-header.php';?>

<div class="content-section">
        <div class="container">
            <div class="row">
 <div class="col-md-5 col-sm-6">
                   <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
              <div class="col-md-12 section-title">
                   
			<h1>เงื่อนไขและข้อกำหนดในการใช้บริการกับอันดามันแท็กซี่</h1><p><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> คนขับรถ และ ได้รับใบอนุญาต ตามกฎหมายไทย</strong><br>
- ผ่านการฝึกอบรมการขับรถ<br>
- คนขับรถสามารถสื่อสารภาษาอังกฤษได้<br>
- ได้รับใบอนุญาตขับรถเพื่อการพาณิชย์ตามกฎหมายไทย<br>
- ขับรถโดยคำนึงถึงความปลอดภัย<br>
- มีความเป็นมิตรกับลูกค้า , คอยช่วยเหลือ และอดกลั้น</p>
			<p><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> การจองรถด่วนทันที</strong><br>
			  Please Call : +66 97 005 4735</p>
			<p><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> การเปลี่ยนแปลง และ การยกเลิกการจอง</strong><br>
			  หากลูกค้าต้องการเปลี่ยนแปลง หรือ ยกเลิกการจอง ให้ส่งรายละเอียดที่ลูกค้าต้องการ ส่ง email ให้ Admin team : andamantaxis@gmail.com </p>
			<p><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> การร้องขอกรณีพิเศษ</strong><br>
			  หากลูกค้ามีการร้องขอกรณีพิเศษโปรดแจ้งเราให้ทราบทันที และ เราจะส่งคำร้องดังกล่าวให้กับ ผู้ดูแลทันที เพื่อให้เป็นไปตามความต้องการของลูกค้า  แต่หากไม่สามารถยืนยันว่าจะได้ตามที่ลูกค้าต้องการ เราขอสงวนสิทธิ์ในการร้องขอดังกล่าว</p>
			<p><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> การยกเลิกการจอง</strong><br>
			  - ลูกค้าสามารถยกเลิกได้ก่อนการเดินทาง 5 วันนับจากวันที่และเวลาเดินทาง และจะคืนเงินให้ทั้งจำนวน <br>
			  - กรณีลูกค้าขอยกเลิกการจองภายในวันและเวลาที่เดินทางจะไม่คืนเงินทุกกรณี </p>
			<p><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ความรับผิดชอบของเรา </strong><br>
			  1. เราคือตัวแทนการจอง ความรับผิดของเราจำกัดเฉพาะการเผยแพร่ข้อมูลในเว็บไซด์ของเราเท่านั้น โดยส่งข้อมูลการจองไปยังซัพพลายเออร์ และแจ้งให้ลูกค้าทราบถึงการเปลี่ยนแปลงที่บังคับใช้กับข้อกำหนดในการจองของลูกค้า เราจะไม่รับผิดชอบต่อความเจ็บป่วย การเสียชีวิต หรือความสูญเสียใดๆ ซึ่งรวมไปถึงความเสียหายหรือการโจรกรรมกระเป๋าหรือของส่วนตัวของลูกค้า โดยการเรียกร้องค่าสินไหมทดแทน การบาดเจ็บ การเจ็บป่วย หรือการเสียชีวิต จะอยู่ภายใต้ความคุ้มครองประกันภัยของคุณ และเราจะยอมรับผิดกับลูกค้าเฉพาะความประมาทของเราเท่านั้น</p>
			<p>2.ในกรณีเข้าเงื่อนไขความรับผิดชอบของเราไม่ว่าด้วยประการใดก็ตาม เราจะรับผิดสูงสุดไม่เกิน 2 เท่าต่อการจองของลูกค้า              </p>
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
<?php include 'th-site-footer.php';?>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="/js/jquery.easing-1.3.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main1.js"></script>
  <!-- Main JS  -->

</body>
</html>
<?php ob_end_flush() ?>