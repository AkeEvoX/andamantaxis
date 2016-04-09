<? ob_start(); 
require_once('../../include/connect.inc.php'); 
require_once('../../include/function.inc.php');
require_once('../../include/auth_admin.inc.php'); 
require_once('../controlpage.php');
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/backend_index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>BackEnd</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../../plugin/jquery-ui/external/jquery/jquery.min.js"></script>
<script src="../../plugin/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../plugin/jquery-ui/jquery-ui.min.css">
<script src="../../plugin/jquery-ui/external/function.js"></script>
<!-- InstanceBeginEditable name="head" -->
<script src="../../plugin/datetimepicker/jquery.datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../../plugin/datetimepicker/jquery.datetimepicker.css">

<script type="text/javascript">
$(document).ready(function(e) {
    $("#submitBtn").click(function(){
		
		$("#payment_priceError").html("");
		$("#payment_dateError").html("");
		
		if ($("#status").val()!=0){
		  if ($("#status").val()!=1){
			if (!checkEmpty("#payment_price","#payment_priceError","Enter Payment Price"))
				return false;
			if (!checkEmpty("#payment_date","#payment_dateError","Enter Payment Date"))
				return false;
		  }else{
			
			if ($("#payment_price").val()>0){
				if (!checkEmpty("#payment_date","#payment_dateError","Enter Payment Date"))
					return false;
			}
			if ($("#payment_date").val()!=""){
				if (!checkEmpty("#payment_price","#payment_priceError","Enter Payment Price"))
					return false;
			}
			
			if ($("#payment_price").val()>0 && $("#payment_date").val()!=""){
				$("#status").val(2);
			}else
				return false;
		  }
		}
		
		
		$("#form1").submit();
		return false;
	});
	
	$("input,select").bind("keypress", function(e) {
	 var code = e.keyCode || e.which;
 		if(code == 13){
			$("#submitBtn").click();
			return false;
		}
	});
	
	$("#payment_date").datetimepicker({
		format:'d M Y H:i'	
	});
});
</script>
<!-- InstanceEndEditable -->
</head>
<body>
	<div class="container">
        <div id="navigation">
            <div id="userInfo">
                <span>Welcome: </span><span><?php echo $name." [".ShowLevel($level)."]"; ?> </span><a href="<?php echo $path ?>backend/login/logout.php">Logout</a>
            </div>
            <?
			echo $menubar;
			?>
            <hr>
        </div>
        <!-- InstanceBeginEditable name="content" -->
        <?php
			$table 	 = "Reservation";

			$status 	= "";
		
			if ($_POST){
				$status 	     = trim($_POST["status"]);
				
				$act  = trim($_POST["act"]);
				$page = trim($_POST["page"]);
				$id   = trim($_POST["id"]);
				
				// Save To Database
				if ($act=="add"){

				}elseif ($act=="update"){

					$sql = "update reservation 
							set reserv_status    = '$status'
							where reserv_id = '$id'
							";
					$result = $conn->query($sql) or exit($conn->error);
					
				}else
					exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
						
				exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
			}
		?>
            <table id="dataTable" cellpadding="5" cellspacing="0">
                <?php				
					$sql = "select * from reservation r
							inner join payment pay on pay.payment_id = r.reserv_payment
							order by case when reserv_status = 1 then 1
										  when reserv_status = 2 then 2
										  when reserv_status = 0 then 3
								 	  end ,reserv_date desc";
					$result = $conn->query($sql) or exit($conn->error);
					
					$total = $result->num_rows;
					$page_size = 15;
					$total_page = ceil($total/$page_size);
					
					$page = $_GET["page"];
					if ($page == "" || $page == 0)
						$page = 1;
					
					if ($page>$total_page)
						$page = $total_page;
					
					$start = ($page-1)*$page_size;
					
					if ($start<0)
						$start = 0;

					$sql .= " limit $start,$page_size";
					$result = $conn->query($sql) or exit($conn->error);
				?>
                <tr class="headTable">
                    <td width="6%" class="textCenter">No</td>
                    <td width="14%" class="textCenter">Date</td>
                    <td class="textCenter">Customer</td>
                    <td width="15%" class="textCenter">Payment</td>
                    <td width="12%" class="textCenter">Payment Price</td>
                    <td width="10%" class="textCenter">Status</td>
                    <td width="12%" class="textCenter" colspan="2"><!--<a href="?page=<?php echo $page ?>&total_page=<?php echo $total_page ?>&act=add#frm">Add New</a>--></td>
                </tr>
				<?php 					
					while($row = $result->fetch_array()){
				
					$class = (++$i%2==1)?"odd":"even";
				?>
                <tr class="<?php echo $class ?>" onMouseOver="this.className='over'" onMouseOut="this.className='<?php echo $class ?>'">
                    <td class="textCenter"><?php echo str_pad($row["reserv_id"],5,"0",STR_PAD_LEFT); ?></td>
                    <td class="textCenter"><?php echo ShowDateTime($row["reserv_date"]) ?></td>
                    <td><?php echo $row["reserv_firstname"]." ".$row["reserv_lastname"] ?></td>
                    <td class="textCenter"><?php echo ucfirst($row["payment_name"]) ?></td>
                    <td style="text-align:right"><?php echo number_format($row["reserv_amount"],2) ?></td>
                    <td class="textCenter"><?php echo ShowStatusReservation($row["reserv_status"]) ?></td>
                    <td width="6%" class="textCenter"><a href="../reservation/?id=<?php echo $row["reserv_id"]?>&page=<?php echo $page?>&act=update#frm">Update</a></td>
                    <td width="6%" class="textCenter"><a href="../reservation/?id=<?php echo $row["reserv_id"]?>&page=<?php echo $page?>&act=delete" onClick="return confirm('Confirm Delete Data ?');">Delete</a></td>
                </tr>
                <?php } ?>
                <tr class="footTable">
                    <td colspan="6">
                        Page: 
                        <?php
							for ($i=1; $i<=$total_page; $i++){
								if ($i==$page)
									echo " <strong>$i</strong> ";
								else
									echo " <a href='?page=$i'>$i</a> ";
									
								if ($i!=$total_page)
									echo " | ";
							}
						?>
                        <br>
                        Total: <?php echo number_format($total); ?> Records
                    </td>
                    <td class="textCenter" colspan="2">
                        Table:<?php echo $table ?>
                    </td>
                 </tr>   
            </table>
            <?php
				if (isset($_GET["act"])){
					
					$act  = $_GET["act"];
					$total_page = $_GET["total_page"];
					$page = $_GET["page"];
					$id   = $_GET["id"];
					
					// Delete 
					if ($act=="delete"){						
						$sql = "delete from reservation_detail 
								where reserv_id = '$id'";
						$result = $conn->query($sql) or exit($conn->error);

						$sql = "delete from reservation 
								where reserv_id = '$id'";
						$result = $conn->query($sql) or exit($conn->error);
						exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
					}
			?>
            <hr>
            <a name="frm"></a>
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <table id="postTable" style="width:90%">
                <tr cos class="headTable">
                  <td class="postHead textCenter" colspan="2"><?php
						if ($act == "add"){ 
							echo "Add New For Table:$table";
							echo "<input type='hidden' name='page' id='page' value='$total_page'>";	
							
							$level = 1;
							$status = 1;
							
						}elseif ($act == "update"){
							echo "Update ID:#".str_pad($id,5,"0",STR_PAD_LEFT)." For Table:$table";
							echo "<input type='hidden' name='id' id='id' value='$id'>";	
							echo "<input type='hidden' name='page' id='page' value='$page'>";	
							
							$sql = "select * from reservation r
									inner join payment pay on pay.payment_id = r.reserv_payment
									where reserv_id = '$id'
									order by reserv_id";
							$result = $conn->query($sql) or exit($conn->error);
							$row = $result->fetch_array();
							
							$date 	   = $row["reserv_date"];
							$firstname  = $row["reserv_firstname"];
							$lastname   = $row["reserv_lastname"];
							$email   	  = $row["reserv_email"];
							$mobile     = $row["reserv_mobile"];
							$detail     = $row["reserv_detail"];
							$address    = $row["reserv_address"];
							$zipcode    = $row["reserv_zipcode"];
							$payment    = $row["payment_name"];
							$amount  	 = $row["reserv_amount"];
							$status 	 = $row["reserv_status"];

						}else
							exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
							

						echo "<input type='hidden' name='act' id='act' value='$act'>";	
	                  ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Customer Name</td>
                  <td class="whiteBG"><?php echo $firstname." ".$lastname; ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Email</td>
                  <td class="whiteBG"><?php echo $email; ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Mobile</td>
                  <td class="whiteBG"><?php echo $mobile; ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Address</td>
                  <td class="whiteBG"><?php echo nl2br($address); ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Zipcode</td>
                  <td class="whiteBG"><?php echo $zipcode; ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Detail</td>
                  <td class="whiteBG"><?php echo nl2br($detail); ?></td>
                </tr>
                <tr class="headTable">
                  <td colspan="2" class="whiteBG"><table width="98%" border="0" align="center" cellpadding="1" cellspacing="2" bgcolor="#999999">
                    <tr bgcolor="#CCFFCC">
                      <th width="6%" bgcolor="#ECFFEC" scope="col">No.</th>
                      <th bgcolor="#ECFFEC" scope="col">Route</th>
                      <th width="15%" bgcolor="#ECFFEC" scope="col">Inbound</th>
                      <th width="15%" bgcolor="#ECFFEC" scope="col">Inbound</th>
                      <th width="12%" bgcolor="#ECFFEC" scope="col">Vehicle</th>
                      <th width="6%" bgcolor="#ECFFEC" scope="col">Unit</th>
                      <th width="12%" bgcolor="#ECFFEC" scope="col">Amount(Baht)</th>
                    </tr>
                    <?php
						$sql = "select *
								from reservation r
								inner join reservation_detail rd on rd.reserv_id = r.reserv_id
								inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
								where rd.reserv_id = '$id'
								order by rdetail_id";
						$result = $conn->query($sql) or exit($conn->error);
						while($row = $result->fetch_array()){
					?>
                    <tr bgcolor="#FFFFFF">
                      <td class="textCenter"><?php echo ++$no ?></td>
                      <td><?php echo showRoute($row["rdetail_origin"],$conn2) ?> - <?php echo showRoute($row["rdetail_destination"],$conn2) ?></td>
                      <td align="center"><?php echo ShowDateTime($row["rdetail_date_origin"]); ?></td>
                      <td align="center"><?php echo ShowDateTime($row["rdetail_date_destination"]); ?></td>
                      <td align="center"><?php echo $row["vtype_name"]; ?></td>
                      <td align="center"><?php echo number_format($row["rdetail_unit"]); ?></td>
                      <td align="right"><?php echo number_format($row["rdetail_amount"]*$row["rdetail_unit"],2) ?>&nbsp;</td>
                    </tr>
                    <?php } ?>
                    <tr bgcolor="#FFFFFF">
                      <th colspan="6" align="right" bgcolor="#ECFFEC">Total Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <td align="right" bgcolor="#ECFFEC"><em><strong><?php echo number_format($amount,2); ?></strong>&nbsp;</em></td>
                    </tr>
                  </table></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Payment</td>
                  <td class="whiteBG"><?php echo $payment; ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Reservation Date</td>
                  <td class="whiteBG"><?php echo ShowDateTime($date) ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Status</td>
                  <td class="whiteBG"><select id="status" name="status">
                    <?php for ($i=0; $i<=2; $i++){ ?>
                    <option value="<?php echo $i ?>" <?php if ($i==$status) echo "selected"; ?>><?php echo ShowStatusReservation($i) ?></option>
                    <?php } ?>
                  </select></td>
                </tr>
                <tr class="headTable">
                  <td class="textCenter" colspan="2"><input type="button" id="submitBtn" value="Save"></td>
                </tr>
              </table>
            </form>
       <?php } ?>
	  <!-- InstanceEndEditable -->
        <div>
        </div>
    </div>
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush(); ?>