<html>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
<?php
$gg=$_POST['email'];
$name = $_POST['name'];
$con = mysql_connect("qdm162198333.my3w.com","qdm162198333","Al344700");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("qdm162198333_db",$con);
  $strsql="update student set Sname='{$name}' where Sno=$gg";
  $result=mysql_query($strsql);
  mysql_close($con);
 ?>
</body>
</html>
