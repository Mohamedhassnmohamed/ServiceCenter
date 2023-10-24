<?php
session_start();
include_once("dbconec.php");
$name = $_POST["name"];
$national_number=$_POST["national_number"];

$password=$_POST["password"];
$email=$_POST["email"];
$type=$_POST["type"];

$sql = "INSERT INTO user (full_name,national_number,password,email,type)
VALUES ('$name','$national_number','$password','$email','$type')";

if ($conn->query($sql) === TRUE) {
	
			
  echo "<script>alert('تم الاضافه بنجاح')</script>;";
   echo "<script>window.history.back();</script>;";

 }
$conn->close();
?>


