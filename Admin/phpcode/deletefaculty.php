<?php

session_start();
include_once("dbconec.php");
$id = $_GET["eid"];

$sql = "delete from faculty where id='$id' ";



if ($conn->query($sql) === TRUE) {
  echo "<script>alert('تم الحذف بنجاح')</script>;";
   echo "<script>window.history.back();</script>;";
} 


$conn->close();
?>


