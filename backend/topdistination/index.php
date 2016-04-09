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
<script type="text/javascript">
$(document).ready(function(e) {
	
	    $("#submitBtn").click(function(){
		
		
			if (!checkEmpty("#name","#nameError","Enter Name"))
				return false;
			if (!checkEmpty("#price","#priceError","Enter Price"))
				return false;
			$("#form1").submit();
		
		});
	
	$("#form1").bind("keypress", function(e) {
	 var code = e.keyCode || e.which;
 		if(code == 13){
			$("#submitBtn").click();
			return false;
		}
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
			$table 	 = "Topdistinations";

			$name = "";
			$price  = "";
		
		
			if ($_POST){
				$name 	= trim($_POST["name"]);
				$price 	 = trim($_POST["price"]);
				$email 	    = trim($_POST["email"]);
				
				$act  = trim($_POST["act"]);
				$page = trim($_POST["page"]);
				$id   = trim($_POST["id"]);
				
				if ($act=="add"){
					$sql = "insert into topdistinations 
							set name = '$name'
							  , price  = '$price'
							";
					$result = $conn->query($sql) or exit($conn->error);
				}elseif ($act=="update"){
				
					$sql = "update topdistinations 
							set name = '$name'
							  , price  = '$price'
							where id = '$id'
							";
					$result = $conn->query($sql) or exit($conn->error);
				}else
					exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
						
				exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
			}
		?>
            <table id="dataTable" cellpadding="5" cellspacing="0">
                <?php
				
					$sql = "select * from topdistinations
							order by id";
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
					
					$sql .= " limit $start,$page_size";
					$result = $conn->query($sql) or exit($conn->error);
					
				?>
                <tr class="headTable">
                    <td width="6%" class="textCenter">No</td>
                    <td>Name</td>
                    <td width="150px">Price</td>
                    <td width="12%" class="textCenter" colspan="2">
                    <?php if ($_COOKIE["login_level"]!=1){ ?>
                    <a href="?page=<?php echo $page ?>&total_page=<?php echo $total_page ?>&act=add#frm">Add New</a>
                    <?php } ?>
                    </td>
                </tr>
				<?php 					
					while($row = $result->fetch_array()){
				
					$class = (++$i%2==1)?"odd":"even";
				?>
                <tr class="<?php echo $class ?>" onMouseOver="this.className='over'" onMouseOut="this.className='<?php echo $class ?>'">
                    <td class="textCenter"><?php echo str_pad($row["id"],3,"0",STR_PAD_LEFT); ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["price"] ?></td>
                    <td width="6%" class="textCenter"><a href="?id=<?php echo $row["id"]?>&page=<?php echo $page?>&act=update#frm">Update</a></td>
                    <td width="6%" class="textCenter"><a href="?id=<?php echo $row["id"]?>&page=<?php echo $page?>&act=delete" onClick="return confirm('Confirm Delete Data ?');">Delete</a></td>
                </tr>
                <?php } ?>
                <tr class="footTable">
                    <td colspan="3">
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
                    Table:<?php echo $table ?></td>
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
						$sql = "delete from topdistinations 
								where id = '$id'";
						$result = $conn->query($sql) or exit($conn->error);
						exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
					}
			?>
            <hr>
            <a name="frm"></a>
            <form name="form1" id="form1" method="post" action="">
              <table id="postTable">
                <tr cos class="headTable">
                  <td class="postHead textCenter" colspan="2"><?php
						if ($act == "add"){ 
							echo "Add New For Table:$table";
							echo "<input type='hidden' name='page' id='page' value='$total_page'>";	
							
						}elseif ($act == "update"){
							echo "Update ID:#".str_pad($id,3,"0",STR_PAD_LEFT)." For Table:$table";
							echo "<input type='hidden' name='id' id='id' value='$id'>";	
							echo "<input type='hidden' name='page' id='page' value='$page'>";	
							
							$sql = "select * from topdistinations
									where id = '$id'
									";
							$result = $conn->query($sql) or exit($conn->error);
							$row = $result->fetch_array();
							
							$name = $row["name"];
							$price  = $row["price"];
							
						}else
							exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
							

						echo "<input type='hidden' name='act' id='act' value='$act'>";	
	                  ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Name</td>
                  <td class="whiteBG"><input type="text" name="name" id="name" value="<?php echo $name ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="nameError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Price</td>
                  <td class="whiteBG"><input type="text" name="price" id="price" value="<?php echo $price ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="priceError"></span></td>
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