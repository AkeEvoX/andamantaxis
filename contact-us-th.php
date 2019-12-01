<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
     <title>ติดต่ออันดามันแท็กซี่ | Customer Services</title>
        <meta name="keywords" content="ติดต่ออันดามันแท็กซี่" />
		<meta name="description" content="ติดต่ออันดามันแท็กซี่ | Customer Services" />
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
                                                       
 <li><a href="https://andamantaxis.com/contact-us.php"><img src="/images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/contact-us-th.php"><img src="/images/th.png" border="0">TH</a></li>

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
            <div class="col-md-9">
              <h2>ติดต่ออันดามันแท็กซี่</h2>  
              
              
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form'; 
		$to = 'contact.andamantaxis@gmail.com'; 
		$subject = 'Message from Contact : เมล์จากลูกค้า (AndamanTaxis)';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message and phone';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank you for getting in contact. We will be in touch with you soon.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
            <!-- Start Contact Form -->
            <form class="form-horizontal" role="form" method="post" action="#">
           
              <div class="form-group">
                <div class="controls">
                First & Last Name<br>
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                Email<br>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                Please enter your message and phone number<br>
                  <textarea name="message" cols="35" rows="4" class="form-control" placeholder="Please enter your message and phone number"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						Your Answer<br>
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
                            
                  <div class="help-block with-errors"></div>
                </div>  
              </div>

              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
               <?php echo $result; ?>	
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"></div>   

            </form>     
            <!-- End Contact Form -->

            </div>
            <div class="col-md-3">
              <h2 class="big-title">สำนักงานใหญ่</h2>   
              <div class="information">              
                <div class="contact-datails">
                  <p> 10/44 Muang Krabi, Krabi, Thailand.</p>
                  <p> TH +66 (08) 7407-1076, EN +66 (08) 9694-1116</p>
                  <p>Contact.andamantaxis@gmail.com</p>
                  <p> 24/7 Phone & Email Support </p>
                                  
       <div>   
                                <div id="TA_selfserveprop25" class="TA_selfserveprop"><ul id="ztHw7bnduh8J" class="TA_links jLp9JMZlVz"><li id="biKylA3QsUBX" class="KmFQecdC"><a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=selfserveprop&uniq=25&locationId=11547571&lang=en_US&rating=true&nreviews=5&writereviewlink=true&popIdx=true&iswide=false&border=true&display_version=2"></script> </div> 
                </div>
                </div>
              </div>
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