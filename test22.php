<?php ob_start();
	require_once('include/connect.php');  
	require_once('include/function.php');
	$conn = new mysql; 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(window).on('load',function(){
		//$('#myModal').modal('show');
	});
	</script>
</head>
<body>
<?php

	$reserve_id = "554"; // reserve id 
	$type_mail = "1"; // mail reminder
	//SendMail("",$reserve_id,$conn,$conn,$type_mail); //   1 is mail reminder
	//echo "Date test :" . date("d F Y , H:i",strtotime("2019-11-11 00:00:00"));
	
	$sender = "svargalok@gmail.com";
	$subject = "";
	$message = "";
	NotifyMail($sender,$subject,$message);
	echo "send mail complete.";
	//$pdf_name = complete_payment("554",$conn);
	//echo "<h3>Send mail complete.</h3>";
	//echo "<a href='".$pdf_name."' target='_blank'>View File</a>";
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>Promotion</h4>
        </div>
        <div class="modal-body">
         <a href="/"><img src="/images/promotion-july.jpg" class="img-responsive" alt="andamantaxis.com"></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </div>

    </div>
</div>
</body>
</html>                            