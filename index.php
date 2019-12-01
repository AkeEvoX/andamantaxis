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
     <title>Krabi Airport Transfers and Taxi Services | AndamanTaxis</title>
        <meta name="keywords" content="Krabi airport transfer, Taxi from Krabi airport to Ao Nang" />
		<meta name="description" content="Book Cheap Van or Sedan from Krabi airport to Ao Nang, Noppharat Thara, Klong Muang
Reliable & Cheap transfer" />
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="pGzqOGmvHUnKcvUHG5DCzRdRAZe2wSgdsrx4shXt-RY" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
    <link rel="canonical" href="https://andamantaxis.com" />
    <link rel="stylesheet" href="css/ch/bootstrap.css">
    <link rel="stylesheet" href="css/ch/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="css/ch/animate.css">
    <link rel="stylesheet" href="css/ch/templatemo-misc.css">
    <link rel="stylesheet" href="css/ch/templatemo-style.css">
    <link rel="stylesheet" href="css/css1.css">
        <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
   
    <!-- Animate CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen">
         
    
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui/css/dot-luv/jquery-ui.min.css"/>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(window).on('load',function(){
	//$('#myModal').modal('show');
});
</script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104219704-1', 'auto');
  ga('send', 'pageview');

   </script>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="plugin/jquery-ui/jquery-ui.js"></script>
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
	background-image: url('images/CarTransfer.jpg');
    
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
                                                       
 <li><a href="https://andamantaxis.com/"><img src="images/en.png" border="0">EN</a></li>
 <li><a href="https://andamantaxis.com/index-th.php"><img src="images/th.png" border="0">TH</a></li>

                            </ul>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
       
        <!-- /.main-header -->
  <?php include 'main-header.php';?>

 <div class="chch">
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                   <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
          
            <div class="col-md-9">
             <div class="ch"><font size="+2">Booking Form</font></div>
<div class="ch1">
           <?php if (is_array($_SESSION["s_route"]) && $_SESSION["s_route"]!=array()){ ?>
        <p><a href="booking-transfer.php">View Reservation</a><?php } ?>   
              
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
                Search for your transfer</div><br>
                <div class="ch"><font size="+2">1.Please Select - One-way or Round trip</font></div>
                <div class="ch1">
                      <label>
                        <input name="transfer" type="radio" class="s2" id="transfer0" value="1" />
                        <span class="s2">One-way</span></label>
                      <label>
                        <input name="transfer" type="radio" class="s2" id="transfer1" value="2" checked="checked" />
                        <span class="s2">Round trip</span></label>
                      <br />
                    <strong>Pick Up</strong> : Province:
                  <select name="province1" class="s2" id="province1">
                    </select>Location:
                    <select name="location1" class="s2" id="location1">
                   
                    </select> <br><br><strong>Drop Off</strong> : <span class="s3">Province:</span>
                   <span class="s3">
                      <select name="province2" class="s2" id="province2">
                      </select>
                    </span><span class="s3">Location:</span>
                   <span class="s3">
                      <select name="location2" class="s2" id="location2">
                      </select></div><br>
                     <div class="ch"><font size="+2">2.Set the date and time</font></div>
                     <div class="ch1"></span>Pickup date:<br>
                    <input name="date1" type="text" class="s2" id="date1" value="<?php echo date("d-m-Y",time()+(60*60*24*3)) ?>" size="15" />
                     Pickup time:
                   <select name="hour1" class="s2" id="hour1">
                      <?php for ($i=0; $i<24; $i++){ ?>
                      <option value="<?php echo $i ?>" <?php if ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select>
             
                      <select name="min1" class="s2" id="min1">
                        <?php for ($i=0; $i<60; $i+=5){ ?>
                        <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                        <?php } ?>
                      </select>
                      
                      <div id="group_departure">
                  <br> <span>Drop-off date:</span><span><br> 
                          <input name="date2" type="text" class="s2" id="date2" value="<?php echo date("d-m-Y",time()+(60*60*24*3)) ?>" size="15" />
                        </span><span>Drop-off time:</span><span>
                          <select name="hour2" class="s2" id="hour2">
                            <?php for ($i=0; $i<24; $i++){ ?>
                            <option value="<?php echo $i ?>" <?php if ($i==8) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                            <?php } ?>
                          </select>

                          <select name="min2" class="s2" id="min2">
                            <?php for ($i=0; $i<60; $i+=5){ ?>
                            <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                            <?php } ?>
                          </select></div>
                          </div>
                          <br>
                        </span><div class="ch"><font size="+2">3.How many people travel? </font></div>
                        <div class="ch1"> Adults (12+):<select name="adults" class="s2" id="adults">
                      <?php for ($i=1; $i<=20; $i++){ ?>
                      <option value="<?php echo $i ?>" <?php if ($i==2) echo "selected"; ?>><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select><br> Children (3-11):
                    <select name="children" class="s2" id="children">
                      <?php for ($i=0; $i<=10; $i++){ ?>
                      <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select><br> Infants (0-2): <select name="infants" class="s2" id="infants">

                      <?php for ($i=0; $i<=10; $i++){ ?>
                      <option value="<?php echo $i ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?></option>
                      <?php } ?>
                    </select></div><br><br> <input type="image" name="imageField" id="imageField" src="images/get-quote.jpg" /><br> Arrive in style and on time<br> Booking in under 3 minutes!<br> 
              </form>
            <!-- End Contact Form -->

            </div>
            
            <div class="col-md-3">
              <h2 class="big-title" style="color:#2d3e50;">Top Destinations</h2>   
              <div class="information">              
                <div class="contact-datails">
                  
						<ul class="list-group">
						<li class="list-group-item list-group-item-success">
							<span class="badge">Prices From</span>
							Transfers in....
						  </li>
						  <?
						  $sql = "select * from topdistinations";
						  $conn->query($sql);
							while ($row = $conn->fetchArray()){
								echo "<li class=\"list-group-item\"> ";
								echo "<span class=\"badge\">".$row["price"]."</span>";
								echo $row["name"]."</li>";
							}
						  ?></p>
                          
                        <br>
                         <form id="frmMember" name="form3" method="post" action="member-login.php">
              <li class="list-group-item list-group-item-success">Login For Agent</li><br>
            
                <?php if ($_SESSION["s_mem_id"]==""){ ?>
               <input type="text" placeholder="email" name="email" id="email" value="<?php echo $email ?>"/><br><br><input type="password" placeholder="password" name="password" id="password" />
               <br /><a href="javascript:" class="r-s4" onMouseOver="MM_swapImage('Image45','','images/b-signup-R.jpg',1)" onMouseOut="MM_swapImgRestore()" onClick="document.getElementById('frmMember').submit()"><img src="images/b-signup.jpg" name="Image45" width="123" height="40" border="0" id="Image45" /></a>&nbsp;&nbsp;&nbsp;** <a href="member-forget.php">Forget Password</a>
                <?php }else{ ?>
              <?php echo $_SESSION["s_mem_username"] ?>
              <br>Name :&nbsp;&nbsp;<?php echo $_SESSION["s_mem_name"] ?>
              <br >&nbsp;&nbsp;<a href="member-logout.php">Logout</a>
                <?php } ?>
             
            </form>  
                          
                          
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

</div>

<?php include 'site-footer.php';?>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main1.js"></script>
<script src="js/notifyApp.js"></script> 

  <!-- Main JS  -->
<div ng-app="notifyApp" ng-controller="alert" data-ng-init="mailing()"></div>


</body>
</html>
<?php ob_end_flush() ?>