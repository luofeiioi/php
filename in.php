<?php
$keyname=$_POST["name"];
$keykey=$_POST["key"];
$con=mysql_connect("qdm162198333.my3w.com","qdm162198333","Al344700");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("qdm162198333_db",$con);
  $strsql="SELECT * FROM admin where Kname='{$keyname}' and mima='{$keykey}'";
  $result=mysql_query($strsql);
  $row=mysql_fetch_array($result);
  if($row[0]>0 && $row['Kname']==123){
    header("location:sel.html");
    echo "success";
  }
  elseif($row[0]>0 && $row['Kname']==234){
    header("location:sell.html");
    echo "success";
  }
  elseif($row[0]>0 && $row['Kname']==345){
    header("location:selll.html");
    echo "success";
  }
  else {
    echo "no success";
  }
  //while ($row=mysql_fetch_array($result))
  //  {
  //    echo $row['Key'];
  //  }
  mysql_close($con);
 ?>
