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
		
		if (!checkEmpty("#firstname","#firstnameError","Enter firstname"))
			return false;
		if (!checkEmpty("#lastname","#lastnameError","Enter lastname"))
			return false;
		if (!checkEmpty("#email","#emailError","Enter email"))
			return false;
		if (!checkEmail("#email","#emailError","Invalid email format"))
			return false;
		if ($("#act").val()=="add"){
			if (!checkEmpty("#password","#passwordError","Enter password"))
				return false;
		}
				
		if ($("#password").val()!=""){
			if ($("#act").val()=="update"){
				if (!checkEmpty("#oldpassword","#oldpasswordError","Enter old password"))
					return false;
	
				if (!checkPassword("#oldpass","#oldpassword","#oldpasswordError","This old password is not same"))
					return false;
			}

			if (!checkEmpty("#repassword","#repasswordError","Enter repassword"))
				return false;
				
			if (!checkPassword("#password","#repassword","#repasswordError","This password is not same"))
				return false;
		}
				
	   var url = "email_server.php";
	   var param = "email="+$("#email").val()+"&id="+$("#id").val();
		
	   $.ajax({
			url      : url,
			data     : param,
			dataType : "html",
			type     : "POST",
			success  : function(result){
			  if (result == "1"){
				$("#emailError").html("This Email is Existing");
			  }else{
				$("#form1").submit();
			  }
			 }
			});
		
		return false;
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
			$table 	 = "Staff";

			$firstname = "";
			$lastname  = "";
			$email 	 = "";
			$password 	   = "";
			$repassword 	 = "";
			$level 	 = "";
			$status 	= "";
		
			if ($_POST){
				$firstname 	= trim($_POST["firstname"]);
				$lastname 	 = trim($_POST["lastname"]);
				$email 	    = trim($_POST["email"]);
				$password 	 = trim($_POST["password"]);
				$level 		= trim($_POST["level"]);
				$status 	   = trim($_POST["status"]);
				
				$act  = trim($_POST["act"]);
				$page = trim($_POST["page"]);
				$id   = trim($_POST["id"]);
				
				if ($act=="add"){
					$sql = "insert into staff 
							set staff_firstname = '$firstname'
							  , staff_lastname  = '$lastname'
							  , staff_email     = '$email'
							  , staff_password  = '$password'
							  , staff_level     = '$level'
							  , staff_status    = '$status'
							";
					$result = $conn->query($sql) or exit($conn->error);
				}elseif ($act=="update"){
					if ($password!="")
						$updatePassword = "  , staff_password  = '$password'";
					
					$sql = "update staff 
							set staff_firstname = '$firstname'
							  , staff_lastname  = '$lastname'
							  , staff_email     = '$email'
							  , staff_level     = '$level'
							  , staff_status    = '$status'
							  $updatePassword
							where staff_id = '$id'
							";
					$result = $conn->query($sql) or exit($conn->error);
				}else
					exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
						
				exit("<script>window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
			}
		?>
            <table id="dataTable" cellpadding="5" cellspacing="0">
                <?php
					if ($_COOKIE["login_level"]==1){
						$staff_sql = "where staff_id = '$id'";
					}
						
					$sql = "select * from staff
							$staff_sql
							order by staff_id";
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
                    <td width="30%">Email</td>
                    <td width="10%" class="textCenter">Level</td>
                    <td width="10%" class="textCenter">Status</td>
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
                    <td class="textCenter"><?php echo str_pad($row["staff_id"],3,"0",STR_PAD_LEFT); ?></td>
                    <td><?php echo $row["staff_firstname"]." ".$row["staff_lastname"] ?></td>
                    <td><?php echo $row["staff_email"] ?></td>
                    <td class="textCenter"><?php echo ShowLevel($row["staff_level"]) ?></td>
                    <td class="textCenter"><?php echo ShowStatus($row["staff_status"]) ?></td>
                    <td width="6%" class="textCenter"><a href="?id=<?php echo $row["staff_id"]?>&page=<?php echo $page?>&act=update#frm">Update</a></td>
                    <td width="6%" class="textCenter"><a href="?id=<?php echo $row["staff_id"]?>&page=<?php echo $page?>&act=delete" onClick="return confirm('Confirm Delete Data ?');">Delete</a></td>
                </tr>
                <?php } ?>
                <tr class="footTable">
                    <td colspan="5">
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
						$sql = "delete from staff 
								where staff_id = '$id'";
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
							
							$level = 1;
							$status = 1;
							
						}elseif ($act == "update"){
							echo "Update ID:#".str_pad($id,3,"0",STR_PAD_LEFT)." For Table:$table";
							echo "<input type='hidden' name='id' id='id' value='$id'>";	
							echo "<input type='hidden' name='page' id='page' value='$page'>";	
							
							$sql = "select * from staff
									where staff_id = '$id'
									order by staff_id";
							$result = $conn->query($sql) or exit($conn->error);
							$row = $result->fetch_array();
							
							$firstname = $row["staff_firstname"];
							$lastname  = $row["staff_lastname"];
							$email 	 = $row["staff_email"];
							$level 	 = $row["staff_level"];
							$status 	= $row["staff_status"];

							echo "<input type='hidden' name='oldpass' id='oldpass' value='".$row["staff_password"]."'>";	

						}else
							exit("<script>alert('error!!');window.location='".$_SERVER['PHP_SELF']."?page=$page';</script>");
							

						echo "<input type='hidden' name='act' id='act' value='$act'>";	
	                  ?></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">FirstName</td>
                  <td class="whiteBG"><input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="firstnameError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">LastName</td>
                  <td class="whiteBG"><input type="text" name="lastname" id="lastname" value="<?php echo $lastname ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="lastnameError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Email</td>
                  <td class="whiteBG"><input type="text" name="email" id="email" value="<?php echo $email ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="emailError"></span></td>
                </tr>
                <?php if ($act == "update"){ ?>
                <tr class="headTable">
                  <td class="topic textCenter">Old-Password</td>
                  <td class="whiteBG"><input type="password" name="oldpassword" id="oldpassword" value="<?php echo $oldpassword ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="oldpasswordError"></span></td>
                </tr>
                <?php } ?>
                <tr class="headTable">
                  <td class="topic textCenter">Password</td>
                  <td class="whiteBG"><input type="password" name="password" id="password" value="<?php echo $password ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="passwordError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Re-Password</td>
                  <td class="whiteBG"><input type="password" name="repassword" id="repassword" value="<?php echo $repassword ?>" class="inputField" autocomplete="off">
                  	<span class="error" id="repasswordError"></span></td>
                </tr>
                <tr class="headTable">
                  <td class="topic textCenter">Level</td>
                  <td class="whiteBG"><select id="level" name="level">
					<?php
						if ($_COOKIE["login_level"]==1)
							$max = 1;
						else
							$max = 2;
					?>
                    <?php for ($i=1; $i<=$max; $i++){ ?>
                    <option value="<?php echo $i ?>" <?php if ($i==$level) echo "selected"; ?>><?php echo ShowLevel($i) ?></option>
                    <?php } ?>
                  </select></td>
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