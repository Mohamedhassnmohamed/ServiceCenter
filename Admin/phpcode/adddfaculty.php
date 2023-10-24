<?php

include_once("dbconec.php");
$name = $_POST["name"];


$sql = "INSERT INTO faculty (name)
VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
	
			
  echo "<script>alert('تم الاضافه بنجاح')</script>;";
   echo "<script>window.history.back();</script>;";

 }
$conn->close();
?>


