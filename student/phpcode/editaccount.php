<?php
session_start();

include_once("dbconec.php");

$id_user=$_POST["id_user"];
	  
include_once("dbconec.php");
$fullname = $_POST["fullname"];

$national_number = $_POST["national_number"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "UPDATE `user` SET `full_name` = '".$fullname."' , `national_number` = '".$national_number."' ,email= '".$email."' ,password= '".$password."'  WHERE `id` = '".$id_user."' ;";

if ($conn->query($query ) === TRUE) {
  echo "<script>alert('تم تعديل بياناتك بنجاح')</script>;";
   echo "<script>window.location='../index1.php';</script>;";
} 

$conn->close();
?>


