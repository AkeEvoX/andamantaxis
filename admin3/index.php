<?php 
include("Connect.php"); 
?> 
<!DOCTYPE html>  
<html lang="th">  
<head>  
<title>รายชื่อทัวร์</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="th" />
        <link rel="stylesheet" type="text/css" href="/media/css/jquery.dataTables.min.css" />
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
        <script src="/media/js/jquery.js"></script>
        <script src="/media/js/jquery.dataTables.min.js"></script>
		<style type="text/css">
body
{

}
.oddtr
{
	background-color:#EFF1F1;
}
.eventr
{
	background-color:#F8F8F8;
}
.trover
{
	background-color: #0099CC;
}
.trclick
{
	background-color: #00CCCC;
}
        </style>


</head>
<body>
<?php 
include("head.php"); 
?> 
    <div align="center"><b>
          <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("ggg");
  mysql_select_db($dbname) or die("ddd");
  mysql_db_query($dbname,"SET NAMES UTF8");
            $sql="SELECT * FROM package,province WHERE package.province_id = province.province_id";
            $query = mysql_db_query($dbname, $sql);
            $num = mysql_num_rows($query);
            if($num > 0){
        ?>
          </b></div>
    <div align="center" style="width: 700px;">
        
        <div align="center">
          <table align="center" cellpadding="2"  id="data-table" border="1" width="1000" bgcolor="#97BFEC">
                
              <thead>
                <tr>
                  <th bgcolor="#CCCCCC"><font color="#0000FF">ID</font></th>
                    <th bgcolor="#CCCCCC">เพคเกจทัวร์<img src="/images/th.png"></th>
                    <th bgcolor="#CCCCCC">จังหวัด</th>
                    <th bgcolor="#CCCCCC">เเก้ไข</th>
					<th bgcolor="#CCCCCC">รูปภาพ</th>
                    <th bgcolor="#CCCCCC">Online</th>
                </tr>
              </thead>
              <tbody>
                <?php
            while($rs = mysql_fetch_assoc($query)){


            ?>
                <tr bordercolor="#333333" bgcolor="#FFFFFF" style="background-color:#fff" onMouseOver="this.style.backgroundColor='#EEEEEE';" onMouseOut="this.style.backgroundColor='#fff';" > 
                  <td><b><?php echo $rs["id"]; ?></b></td>
                    <td><?php echo $rs["name_th"]; ?></td>
                    <td><?php echo $rs["province_name"]; ?></td>
                        <th><a href="INSERT-UPDATE3.php?id=<?php echo $rs['id']; ?>" target="_blank">เเก้ไขเพคเกจ</a></th>
						<th><a href="addimg.php?id=<?php echo $rs['id']; ?>" target="_blank">เพิ่มรูป</a></th>
                        <th><?php echo $rs["active"];?> 
						
</th>
                </tr>
                  
                <?php
            }
            ?>
              </tbody>
          </table>
              <table width="900" align="center" cellpadding="2" bordercolor="#CCCCCC" id="data-table" bgcolor="#97BFEC">
                <tbody>
                  <?php
            while($rs = mysql_fetch_assoc($query)){
            ?>
                  
                  <?php
            }
            ?>
                </tbody>
            </table>
      </div>
    </div>
        
EN
          <div align="center"><b>
          <?php 
            }
        ?>
          </b></div>
          
              <div align="center"><b>
          <?php
include("config.inc.php");
  $conn=mysql_connect($hostname, $user, $password) or die("ggg");
  mysql_select_db($dbname) or die("ddd");
  mysql_db_query($dbname,"SET NAMES UTF8");
            $sql="SELECT * FROM package,province WHERE package.province_id = province.province_id";
            $query = mysql_db_query($dbname, $sql);
            $num = mysql_num_rows($query);
            if($num > 0){
        ?>
          </b></div>
    <div align="center" style="width: 700px;">
        
        <div align="center">
          <table align="center" cellpadding="2"  id="data-table2" border="1" width="1000" bgcolor="#97BFEC">
                
              <thead>
                <tr>
                  <th bgcolor="#CCCCCC"><font color="#0000FF">ID</font></th>
                    <th bgcolor="#CCCCCC">เพคเกจทัวร์ <img src="/images/en.png"></th>
                    <th bgcolor="#CCCCCC">จังหวัด</th>
                    <th bgcolor="#CCCCCC">เเก้ไข</th>
					<th bgcolor="#CCCCCC">รูปภาพ</th>
                    <th bgcolor="#CCCCCC">Online</th>
                </tr>
              </thead>
              <tbody>
                <?php
            while($rs = mysql_fetch_assoc($query)){


            ?>
                <tr bordercolor="#333333" bgcolor="#FFFFFF" style="background-color:#fff" onMouseOver="this.style.backgroundColor='#EEEEEE';" onMouseOut="this.style.backgroundColor='#fff';" > 
                  <td><b><?php echo $rs["id"]; ?></b></td>
                    <td><?php echo $rs["name"]; ?></td>
                    <td><?php echo $rs["province_name"]; ?></td>
                        <th><a href="INSERT-UPDATE.php?id=<?php echo $rs['id']; ?>" target="_blank">เเก้ไขเพคเกจ</a></th>
						<th><a href="addimg.php?id=<?php echo $rs['id']; ?>" target="_blank">เเก้ไขรูป</a></th>
                        <th><?php echo $rs["active"];?> 
						
</th>
                </tr>
                  
                <?php
            }
            ?>
              </tbody>
          </table>
              <table width="900" align="center" cellpadding="2" bordercolor="#CCCCCC" id="data-table" bgcolor="#97BFEC">
                <tbody>
                  <?php
            while($rs = mysql_fetch_assoc($query)){
            ?>
                  
                  <?php
            }
            ?>
                </tbody>
            </table>
      </div>
    </div>
        

          <div align="center"><b>
          <?php 
            }
        ?>
          </b></div>
          <?php 
include("footer.php"); 
?> 
</body>
  <script>
$(document).ready(function() {
    $('#data-table').dataTable( {
    "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]],
    "pageLength": 10
    } );
} );
    </script>
      <script>
$(document).ready(function() {
    $('#data-table2').dataTable( {
    "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]],
    "pageLength": 10
    } );
} );
    </script>
</html>
