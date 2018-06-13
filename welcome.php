<html>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
<?php
$gg="";
$name = $_POST['name'];
$con = mysql_connect("qdm162198333.my3w.com","qdm162198333","Al344700");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("qdm162198333_db",$con);
  $strsql="SELECT *  FROM `student` where Sno=$name";
  $result=mysql_query($strsql);
  while ($row=mysql_fetch_array($result))
    {
      echo $row['Sno'] . " " . $row['Sname'];
      echo "<br />";
    }
  mysql_close($con);
 ?>
</body>
</html>
