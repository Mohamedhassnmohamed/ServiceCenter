<?php
session_start();
include_once("dbconec.php");
$desc_ser = $_POST["desc_ser"];
$salary=$_POST["salary"];



$sql = "INSERT INTO user (desc_ser,salary)
VALUES ('$desc_ser','$salary')";

if ($conn->query($sql) === TRUE) {
	
			
  echo "<script>alert('تم الاضافه بنجاح')</script>;";
   echo "<script>window.history.back();</script>;";

 }
$conn->close();
?>


