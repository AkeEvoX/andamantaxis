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
	
	$("#buttonSearchAll").click(function(){
		$("#searchStart").val("");	
		$("#searchEnd").val("");	
		$("#searchBound").val("");	
		$("#searchBy").val("");	
		$("#searchStatus").val("");	
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
			$table 	 = "Route";

			$status 	= "";
		
			if (isset($_POST["id"])){
				$amount 		= trim($_POST["amount"]);
				$amount_agent 	= trim($_POST["amount_agent"]);
				$interval 		= trim($_POST["interval"]);
				$status 		= trim($_POST["status"]);
				$tprice_id 		= trim($_POST["tprice_id"]);

				$act  = trim($_POST["act"]);
				$page = trim($_POST["page"]);
				$id   = trim($_POST["id"]);
				
				// Save To Database
				if ($act=="add"){

				}elseif ($act=="update"){

					$sql = "update travel_price 
							set tprice_amount   	= '$amount'
							  , tprice_amount_agent = '$amount_agent'
							where tprice_id = '$tprice_id'
							";
					$result = $conn->query($sql) or exit($conn->error);
					
					$sql = "update travel_route 
							set troute_interval = '$interval'
							  , troute_status   = '$status'
							where troute_id = '$id'
							";
					$result = $conn->query($sql) or exit($conn->error);
				}
				/*else
					exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");*/
						
				exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
			}
		?>
        <form name="frmSearch" id="frmSearch" action="" method="post"> 
            <table id="dataTable" cellpadding="5" cellspacing="0">
                <?php				
					// Search
					$search = "";
					if (isset($_REQUEST["work"])){
						$work		   = trim($_REQUEST["work"]);
						$searchStart   = trim($_REQUEST["searchStart"]);
						$searchEnd     = trim($_REQUEST["searchEnd"]);
						$searchBound   = trim($_REQUEST["searchBound"]);
						$searchBy      = trim($_REQUEST["searchBy"]);
						$searchStatus  = trim($_REQUEST["searchStatus"]);

						if ($searchStart!="")
							$search .= " and (tlocation_id_origin = '$searchStart' or
											 tlocation_id_destination = '$searchStart')";
											 
						if ($searchEnd!="")
							$search .= " and (tlocation_id_origin = '$searchEnd' or
											 tlocation_id_destination = '$searchEnd')";
											 
						if ($searchBound!="")
							$search .= " and tprice_bound = '$searchBound'";
						if ($searchBy!="")
							$search .= " and vtype_id = '$searchBy'";
						if ($searchStatus!="")
							$search .= " and troute_status = '$searchStatus'";
					}

					$sql = "select * from travel_route tr 
							left join travel_price tp on tr.troute_id = tp.troute_id
							order by tr.troute_id,vtype_id,tprice_bound";
					$result = $conn->query($sql) or exit($conn->error);
					$alltotal = $result->num_rows;

					$sql = "select * from travel_route tr 
							left join travel_price tp on tr.troute_id = tp.troute_id
							where tp.tprice_id <> ''
								  $search
							order by tr.troute_id,vtype_id,tprice_bound";
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
                    <td>Start - End</td>
                    <td width="8%" class="textCenter">By</td>
                    <td width="13%" class="textCenter">Customer | Agent <br>
                    Price</td>
                    <td width="10%" class="textCenter">Interval (min)</td>
                    <td width="8%" class="textCenter">Status</td>
                    <td width="12%" class="textCenter" colspan="2"><!--<a href="?page=<?php echo $page ?>&total_page=<?php echo $total_page ?>&act=add#frm">Add New</a>--></td>
                </tr>
                <tr>
                	<td bgcolor="#CCCCCC"></td>
                	<td><select name="searchStart" id="searchStart">
                	  <option value="" <?php if ($searchStart=="") echo "selected"; ?>>ทั้งหมด</option>
                	  <?php 
							$sql2 = "select tlocation_id,tprovince_name,tlocation_name
									 from travel_province tp
								inner join travel_location tl on tp.tprovince_id = tl.tprovince_id
									 where tprovince_status = 1
									   and tlocation_status = 1
									 order by tlocation_id,tlocation_name
								";
							$result2 = $conn2->query($sql2) or exit($conn2->error);
							while($row2 = $result2->fetch_array()){ 
						?>
                	  <option value="<?php echo $row2[0] ?>" <?php if ($searchStart==$row2[0]) echo "selected"; ?>><?php echo /*$row2[1]."/".*/$row2[2] ?></option>
                	  <?php } ?>
              	  </select> 
                	  - 
                	  <select name="searchEnd" id="searchEnd">
                	    <option value="" <?php if ($searchEnd=="") echo "selected"; ?>>ทั้งหมด</option>
                	    <?php 
							$sql2 = "select tlocation_id,tprovince_name,tlocation_name
									 from travel_province tp
								inner join travel_location tl on tp.tprovince_id = tl.tprovince_id
									 where tprovince_status = 1
									   and tlocation_status = 1
									 order by tlocation_id,tlocation_name
								";
							$result2 = $conn2->query($sql2) or exit($conn2->error);
							while($row2 = $result2->fetch_array()){ 
						?>
                	  <option value="<?php echo $row2[0] ?>" <?php if ($searchEnd==$row2[0]) echo "selected"; ?>><?php echo /*$row2[1]."/".*/$row2[2] ?></option>
                	    <?php } ?>
              	    </select> 
                	  (
                	  <select name="searchBound" id="searchBound">
                	    <option value="" <?php if ($searchBound=="") echo "selected"; ?>>ทั้งหมด</option>
                	    <?php 
							for ($z=1; $z<=2; $z++){
						?>
                	    <option value="<?php echo $z ?>" <?php if ($searchBound==$z) echo "selected"; ?>><?php echo ($z==1)?"One Way":"Return"; ?></option>
                	    <?php } ?>
              	    </select>
                	  )</td>
                	<td><select name="searchBy" id="searchBy">
                	  <option value="" <?php if ($searchBy=="") echo "selected"; ?>>ทั้งหมด</option>
                	  <?php 
							for ($z=1; $z<=2; $z++){
						?>
                	  <option value="<?php echo $z ?>" <?php if ($searchBy==$z) echo "selected"; ?>><?php echo ($z==1)?"Car":"Van"; ?></option>
                	  <?php } ?>
              	  </select></td>
                	<td bgcolor="#CCCCCC"></td>
                	<td bgcolor="#CCCCCC"></td>
                	<td><select name="searchStatus" id="searchStatus">
                	  <option value="" <?php if ($searchStatus=="") echo "selected"; ?>>ทั้งหมด</option>
                	  <?php 
							for ($z=1; $z<=2; $z++){
						?>
                	  <option value="<?php echo $z ?>" <?php if ($searchStatus==$z) echo "selected"; ?>><?php echo ShowStatus($z) ?></option>
                	  <?php } ?>
              	  </select></td>
                	<td colspan="2" bgcolor="#CCCCCC" align="center"><button id="buttonSearch">Search</button>
                     <?php if ($search!=""){ ?>
                    &nbsp;<button id="buttonSearchAll">Show All</button>
                     <?php } ?>
                    <input type="hidden" name="work" value="search"></td>
           	  </tr>
                
				<?php 					
					while($row = $result->fetch_array()){
				
					$class = (++$i%2==1)?"odd":"even";
				?>
                <tr class="<?php echo $class ?>" onMouseOver="this.className='over'" onMouseOut="this.className='<?php echo $class ?>'">
                    <td class="textCenter"><?php echo str_pad($i+(($page-1)*$page_size),3,"0",STR_PAD_LEFT); ?></td>
                    <td><?php echo ShowRoute($row["tlocation_id_origin"],$conn2)." - ".ShowRoute($row["tlocation_id_destination"],$conn2) ?>
						<?php echo ($row["tprice_bound"]==1)?" (One Way)":" (Return)";?></td>
                    <td><?php echo ($row["vtype_id"]==1)?"Car":"Van"; ?></td>
                    <td class="textCenter"><?php echo number_format($row["tprice_amount"],2). " | ". number_format($row["tprice_amount_agent"],2) ?></td>
                    <td class="textCenter"><?php echo number_format($row["troute_interval"]) ?></td>
                    <td class="textCenter"><?php echo ShowStatus($row["troute_status"]) ?></td>
                    <td width="6%" class="textCenter"><a href="../route/?id=<?php echo $row["tprice_id"]?>&page=<?php echo $page?>&act=update#frm">Update</a></td>
                    <td width="6%" class="textCenter"><a href="../route/?id=<?php echo $row["tprice_id"]?>&page=<?php echo $page?>&act=delete" onClick="return confirm('Confirm Delete Data ?');">Delete</a></td>
                </tr>
                <?php } ?>
                <tr class="footTable">
                    <td colspan="6">
                        Page: 
                        <?php
							$get = "work=$work&searchStart=$searchStart&searchEnd=$searchEnd&searchBound=$searchBound&searchBy=$searchBy&searchStatus=$searchStatus";
						
							for ($i=1; $i<=$total_page; $i++){
								if ($i==$page)
									echo " <strong>$i</strong> ";
								else
									echo " <a href='?page=$i&$get'>$i</a> ";
									
								if ($i!=$total_page)
									echo " | ";
							}
						?>
                        <br>
                        Total: <?php echo number_format($total); ?> Records
                        <?php if ($search!="") echo " (All Total: $alltotal Records)"; ?>
                    </td>
                    <td class="textCenter" colspan="2">
                        Table:<?php echo $table ?>
                    </td>
                 </tr>   
            </table>
            </form>
            <?php
				if (isset($_GET["act"])){
					
					$act  = $_GET["act"];
					$total_page = $_GET["total_page"];
					$page = $_GET["page"];
					$id   = $_GET["id"];
					
					// Delete 
					if ($act=="delete"){						
						$sql = "delete from travel_price 
								where tprice_id = '$id'";
						$result = $conn->query($sql) or exit($conn->error);
						exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page&$get';</script>");
					}
			?>
            <hr>
            <a name="frm"></a>
            <form action="?$get" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
							
							$sql = "select * from travel_route tr
									left join travel_price tp on tr.troute_id = tp.troute_id
									where tprice_id = '$id'
									order by tprice_id";
							$result = $conn->query($sql) or exit($conn->error);
							$row = $result->fetch_array();
							
							$tprice_id 	  = $row["tprice_id"];
							$origin 	  = $row["tlocation_id_origin"];
							$destination  = $row["tlocation_id_destination"];
							$bound 		  = $row["tprice_bound"];
							$vtype 	 	  = $row["vtype_id"];
							$amount 	  = $row["tprice_amount"];
							$amount_agent = $row["tprice_amount_agent"];
							$interval 	  = $row["troute_interval"];
							$status 	  = $row["troute_status"];

						}
						/*else
							exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");*/
							

						echo "<input type='hidden' name='tprice_id' id='tprice_id' value='$tprice_id'>";	
						echo "<input type='hidden' name='act' id='act' value='$act'>";	
	                  ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Start - End</td>
                  <td class="whiteBG"><?php echo ShowRoute($origin,$conn2)." - ".ShowRoute($destination,$conn2) ?>
						<?php echo ($bound==1)?" (One Way)":" (Return)";?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">By</td>
                  <td class="whiteBG"><?php echo ($vtype==1)?"Car":"Van"; ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Customer Price</td>
                  <td class="whiteBG"><input type="text" name="amount" id="amount" value="<?php echo $amount ?>" class="inputField" autocomplete="off">
                    <span class="error" id="tprice_amountError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Agent Price</td>
                  <td class="whiteBG"><input type="text" name="amount_agent" id="amount_agent" value="<?php echo $amount_agent ?>" class="inputField" autocomplete="off">
                    <span class="error" id="tprice_amount_agentError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Interval</td>
                  <td class="whiteBG"><input type="text" name="interval" id="interval" value="<?php echo $interval ?>" class="inputField" autocomplete="off">
                    <span class="error" id="troute_intervalError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Status</td>
                  <td class="whiteBG"><select id="status" name="status">
                    <?php for ($i=1; $i<=2; $i++){ ?>
                    <option value="<?php echo $i ?>" <?php if ($i==$status) echo "selected"; ?>><?php echo ShowStatus($i) ?></option>
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