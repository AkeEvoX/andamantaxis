<?php ob_start(); ?>
<?php require_once('../../include/connect.inc.php'); ?>
<?php	
	$email = trim($_POST["email"]);
	$id = trim($_POST["id"]);

	if ($id == "")
		$sql = "select * from staff 
				where staff_email = '$email'
			   ";
	else
		$sql = "select * from staff 
				where staff_email = '$email'
				  and staff_id <> '$id'
			   ";
	
	$result = $conn->query($sql) or exit($conn->error);
	
	if($result->num_rows>0)
		exit("1");
?>
<?php ob_end_flush() ?>